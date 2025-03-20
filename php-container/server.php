<?php
require_once __DIR__ . '/vendor/autoload.php';

use Adyen\Client;
use Adyen\Environment;
use Adyen\Service\Checkout;

header("Content-Type: application/json");
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle CORS preflight requests
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    exit(0);
}

// Handle `/run-test` requests only
$requestUri = $_SERVER["REQUEST_URI"];
if ($requestUri !== "/run-test") {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
    exit;
}

// Load API key and Merchant Account from environment variables
$apiKey = getenv("ADYEN_API_KEY");
$merchantAccount = getenv("ADYEN_MERCHANT_ACCOUNT");

if (!$apiKey || !$merchantAccount) {
    echo json_encode(["error" => "Missing API key or Merchant Account"]);
    exit;
}

// Create Adyen Client
$client = new Client();
$client->setEnvironment(Environment::TEST);
$client->setXApiKey($apiKey);
$checkout = new Checkout($client);

// Get request data
$request = json_decode(file_get_contents("php://input"), true);
if (!$request || !isset($request["api"]) || !isset($request["params"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

// Add `merchantAccount` to request params
$request["params"]["merchantAccount"] = $merchantAccount;

try {
    if ($request["api"] === "/payments") {
        $response = $checkout->payments($request["params"]);
    } elseif ($request["api"] === "/payments/details") {
        $response = $checkout->paymentsDetails($request["params"]);
    } elseif (preg_match("#^/payments/([^/]+)/cancel$#", $request["api"], $matches)) {
        // Extract the paymentPspReference from the URL
        $paymentPspReference = $matches[1];

        // Construct request parameters
        $request["params"]["merchantAccount"] = $merchantAccount;
        $request["params"]["paymentPspReference"] = $paymentPspReference;

        // Call Adyen API for payment cancellation
        $response = $checkout->paymentsCancels($request["params"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Unsupported API endpoint"]);
        exit;
    }

    echo json_encode($response);
} catch (\Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

//try {
//    if ($request["api"] === "/payments") {
//        $response = $checkout->payments($request["params"]);
//    } elseif ($request["api"] === "/payments/details") {
//        $response = $checkout->paymentsDetails($request["params"]);
//    } else {
//        http_response_code(400);
//        echo json_encode(["error" => "Unsupported API endpoint"]);
//        exit;
//    }
//    
//    echo json_encode($response);
//} catch (\Exception $e) {
//    echo json_encode(["error" => $e->getMessage()]);
//}

