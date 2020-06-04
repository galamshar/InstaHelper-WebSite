<?php
require_once('../models/registerModel.php');

class registerController
{
    public $model;

    public function __construct()
    {
        $this->model = new registerModel();
    }

    public function isCorrectUsername($username)
    {
        $length = strlen($username);
        if ($length > 3) {
            return true;
        }
        return array('success' => 'false',"error" => "Username must be min. 3 and max. 17");
    }

    public function isCorrectPassword($password)
    {
        $length = strlen($password);
        if ($length > 3 && $length < 32) {
            if (!preg_match("/([0-9]+)/", $password)) {
                return array('success' => 'false','error' => "You password must be have 1 number");
            } elseif (!preg_match("/([a-z]+)/", $password)) {
                return array('success' => 'false','error' => "You password must be have 1 lower case char");
            } elseif (!preg_match("/([A-Z]+)/", $password)) {
                return array('success' => 'false','error' =>"You password must be have 1 upper case char");
            }
            return true;
        }
        return array('success' => 'false','error' => 'You password length must be more than 3');
    }

    public function isCorrectEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return array('success' => 'false','error'=> 'Incorrect email type, try again!');
        }
    }

    public function isCorrectData($username, $email, $password)
    {
        $checkUsername = $this->isCorrectUsername($username);
        $checkEmail = $this->isCorrectEmail($email);
        $checkPassword = $this->isCorrectPassword($password);
        if (is_array($checkUsername)) {
            return $checkUsername;
        } elseif (is_array($checkEmail)) {
            return $checkEmail;
        } elseif (is_array($checkPassword)) {
            return $checkPassword;
        }
        return true;
    }

    public function invoke($username, $email, $password)
    {
        $checkData = $this->isCorrectData($username, $email, $password);
        if (!is_array($checkData)) {
            $res = $this->model->register($username, $email, $password);
            if (!is_array($res)) {
                header('HTTP/1.1 201 OK');
                return json_encode(array('success' => 'true','error'=> 'null'));
            } else {
                return json_encode($res);
            }
        } else {
            return json_encode($checkData);
        }
    }
}