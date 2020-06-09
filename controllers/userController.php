<?php
require_once('../../models/userModel.php');

class userController
{
    public $model;

    public function __construct()
    {
        $this->model = new userModel();
    }

    public function getInfo()
    {
        $res = $this->model->getInfo();
        return json_encode($res);
    }

    public function logOut()
    {
        if ($this->model->is_logged_in()) {
            $this->model->logout();
            return array('success' => 'true');
        } else {
            return array('success' => 'false');
        }
    }

    public function isLoggedIn()
    {
        if ($this->model->is_logged_in()) {
            return array('success' => 'true', 'loggedIn' => 'true');
        } else {
            return array('success' => 'false', 'loggedIn' => 'false');
        }
    }

    public function isCorrectPassword($password)
    {
        $length = strlen($password);
        if ($length > 3 && $length < 32) {
            if (!preg_match("/([0-9]+)/", $password)) {
                return array('success' => 'false', 'error' => "You password must be have 1 number");
            } elseif (!preg_match("/([a-z]+)/", $password)) {
                return array('success' => 'false', 'error' => "You password must be have 1 lower case char");
            } elseif (!preg_match("/([A-Z]+)/", $password)) {
                return array('success' => 'false', 'error' => "You password must be have 1 upper case char");
            }
            return true;
        }
        return array('success' => 'false', 'error' => 'You password length must be more than 3');
    }

    public function changePassword($oldpwd,$password)
    {
        $checkPassword = $this->isCorrectPassword($password);
        if (!is_array($checkPassword)) {
            return $this->model->changePassword($oldpwd,$password);
        } else {
            return $checkPassword;
        }
    }

    public function changeSubscription($subscriptionName){
        if ($subscriptionName == "Basic" || $subscriptionName == "Pro"){
            if ($subscriptionName != $this->model->getInfo()->getSubType()){
                if ($subscriptionName == "Basic"){
                   return $this->model->changeSubscription(1);
                } elseif ($subscriptionName == "Pro"){
                   return $this->model->changeSubscription(2);
                }
            } else {
                return array('success' => 'false', 'error' => 'User already has this subscription type');
            }
        } else {
            return array('success' => 'false', 'error' => 'Incorrect subscription type');
        }
    }
}