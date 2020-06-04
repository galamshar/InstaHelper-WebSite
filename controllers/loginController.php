<?php
require_once '../models/loginModel.php';
class loginController
{
    public $model;

    public function __construct()
    {
        $this->model = new loginModel();
    }

    public function isCorrectLogin($login)
    {
        $length = strlen($login);
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

    public function invoke($login, $password)
    {
        $checkLogin = $this->isCorrectLogin($login);
        $checkPassword = $this->isCorrectPassword($password);
        if (!is_array($checkLogin) && !is_array($checkPassword)) {
            $res = $this->model->login($login, $password);
            return json_encode($res);
        } else if (is_array($checkLogin)){
            return json_encode($checkLogin);
        } else if(is_array($checkPassword)){
            return json_encode($checkPassword);
        }
    }

}