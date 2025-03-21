<?php
require_once __DIR__ . '/vendor/autoload.php';

use Adyen\Client;
use Adyen\Environment;

//use Adyen\Service\Checkout\PaymentMethodsApi;
use Adyen\Service\Checkout\PaymentsApi;
use Adyen\Service\Checkout\ModificationsApi;

use Adyen\Model\Checkout\PaymentMethodsRequest;
use Adyen\Model\Checkout\PaymentRequest;
use Adyen\Model\Checkout\PaymentDetailsRequest;
use Adyen\Model\Checkout\PaymentCancelRequest;

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    exit(0);
}

class AdyenHandler {
    private $client;
    private $merchantAccount;

    public function __construct($apiKey, $merchantAccount) {
        $this->merchantAccount = $merchantAccount;
        $this->client = new Client();
        $this->client->setEnvironment(Environment::TEST);
        $this->client->setXApiKey($apiKey);
    }

    public function handleRequest($endpoint, $params) {
        $params['merchantAccount'] = $this->merchantAccount;

        if ($endpoint === '/payments') {
            // Service Layer
            $service = new PaymentsApi($this->client);
            // Data Transfer Object
            $request = new PaymentRequest($params);
            // Use Case
            return $service->payments($request);
        }

        if ($endpoint === '/payments/details') {
            // Service Layer
            $service = new PaymentsApi($this->client);
            // Data Transfer Object
            $request = new PaymentDetailsRequest($params);
            // Use Case
            return $service->paymentsDetails($request);
        }

        if ($endpoint === '/paymentMethods') {
            $service = new PaymentsApi($this->client);
            $request = new PaymentMethodsRequest($params);
            return $service->paymentMethods($request);
        }

        if (preg_match("#^/payments/([^/]+)/cancel$#", $endpoint, $matches)) {
            $paymentPspReference = $matches[1];

            // Service Layer
            $service = new ModificationsApi($this->client);
        
            // Data Transfer Object
            $request = new PaymentCancelRequest();
            $request->setMerchantAccount($this->merchantAccount);
        
            // Use Case
            return $service->cancelAuthorisedPaymentByPspReference($paymentPspReference, $request);
        }

        throw new Exception("Unsupported API endpoint");
    }
}

// Entry point
if ($_SERVER["REQUEST_URI"] !== "/run-test") {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
    exit;
}

$apiKey = getenv("ADYEN_API_KEY");
$merchantAccount = getenv("ADYEN_MERCHANT_ACCOUNT");

if (!$apiKey || !$merchantAccount) {
    echo json_encode(["error" => "Missing API key or Merchant Account"]);
    exit;
}

$request = json_decode(file_get_contents("php://input"), true);
if (!$request || !isset($request["api"]) || !isset($request["params"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

try {
    $handler = new AdyenHandler($apiKey, $merchantAccount);
    $result = $handler->handleRequest($request["api"], $request["params"]);
    echo json_encode($result);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

