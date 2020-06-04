<?php
require_once('..\..\controllers\userController.php');
$userController = new userController();
echo $userController->getInfo();
