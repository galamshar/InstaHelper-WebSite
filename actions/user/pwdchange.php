<?php
require_once('..\..\controllers\userController.php');
$userController = new userController();
$oldpassword = $_POST['oldpwd'];
$newpwd = $_POST['newpwd'];
$confirmpwd = $_POST['confirmpwd'];

if ($newpwd == $confirmpwd) {
    echo json_encode($userController->changePassword($oldpassword,$newpwd));
} else {
    echo json_encode(array('success' => 'false','error' => 'Passwords don\'t match'));
}
