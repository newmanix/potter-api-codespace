<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(["error" => "Only GET method is supported."]);
    exit;
}

$cat = $_GET['cat'] ?? 'year';

switch ($cat) {
    case "box":
        $file = 'data/bond-box-office.js';
        break;
    case "year":
    default:
        $file = 'data/bond-year.js';
        break;
}

if (file_exists($file)) {
    include($file);
} else {
    http_response_code(404);
    echo json_encode(["error" => "Requested data file not found."]);
}
?>