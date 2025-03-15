<?php
require_once __DIR__ . '/vendor/autoload.php';

use Adyen\Client;
use Adyen\Environment;
use Adyen\Service\Checkout;

header("Content-Type: application/json");

// `/run-test` のみを処理するようにチェック
$requestUri = $_SERVER["REQUEST_URI"];
if ($requestUri !== "/run-test") {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
    exit;
}

// 環境変数から API キーと Merchant Account を取得
$apiKey = getenv("ADYEN_API_KEY");
$merchantAccount = getenv("MERCHANT_ACCOUNT");

if (!$apiKey || !$merchantAccount) {
    echo json_encode(["error" => "Missing API key or Merchant Account"]);
    exit;
}

// Adyen クライアントを作成
$client = new Client();
$client->setEnvironment(Environment::TEST);
$client->setXApiKey($apiKey);
$checkout = new Checkout($client);

// リクエストデータを取得
$request = json_decode(file_get_contents("php://input"), true);
if (!$request || !isset($request["api"]) || !isset($request["params"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

// `merchantAccount` をリクエストに追加
$request["params"]["merchantAccount"] = $merchantAccount;

try {
    if ($request["api"] === "/payments") {
        $response = $checkout->payments($request["params"]);
    } elseif ($request["api"] === "/payments/details") {
        $response = $checkout->paymentsDetails($request["params"]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Unsupported API endpoint"]);
        exit;
    }
    
    echo json_encode($response);
} catch (\Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

