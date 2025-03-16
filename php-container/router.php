<?php
if ($_SERVER["REQUEST_URI"] === "/run-test") {
    require 'server.php';
} else {
    http_response_code(404);
    echo json_encode(["error" => "Not Found"]);
}
