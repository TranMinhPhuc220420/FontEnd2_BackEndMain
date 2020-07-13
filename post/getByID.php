<?php
// CORS support
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once '../config/database.php';
spl_autoload_register(function ($className) {
    require '../models/' . $className . '.php';
});


$input = json_decode(file_get_contents('php://input'), true);

$postModel = new Post();
$item = $postModel->getByID(1);
echo json_encode($item);

if($_SERVER["REQUEST_METHOD"] == "OPTIONS") exit();