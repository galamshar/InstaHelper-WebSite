<?php
require_once('..\..\controllers\userController.php');
$userController = new userController();
echo json_encode($userController->changeSubscription($_POST['subname']));
