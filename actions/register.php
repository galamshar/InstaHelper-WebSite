<?php
require_once ('../controllers/registerController.php');
$registerController = new registerController();

$EMAIL = $_POST['email'];
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];
header("Content-Type: application/json");
echo $registerController->invoke($USERNAME, $EMAIL, $PASSWORD);