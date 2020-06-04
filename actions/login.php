<?php
require_once('../controllers/loginController.php');
$loginController = new loginController();
$LOGIN = $_POST['login'];
$PASSWORD = $_POST['password'];
header("Content-Type: application/json");
echo $loginController->invoke($LOGIN, $PASSWORD);
