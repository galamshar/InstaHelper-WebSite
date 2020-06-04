<?php
require_once '../config.php';
require_once '../classes/User.php';

class registerModel
{
    private DB $_db;
    private $dbconn;

    public function __construct()
    {
        $this->_db = new DB();
        $this->dbconn = $this->_db->getDb();
    }

    public function findUser($username, $email)
    {
        try {
            $STH = $this->dbconn->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
            $STH->execute(array('username' => $username, 'email' => $email));
            return $STH->fetch();
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            return null;
        }

    }

    public function insertUser($username, $email, $password)
    {
        try {
            $STH = $this->dbconn->prepare('INSERT INTO `users`(`email`, `username`, `password`) VALUES (:email,:username,:password)');
            $STH->execute(array('username' => $username, 'email' => $email, 'password' => $password));
            return $STH->fetch();

        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            exit();
        }
    }

    public function register($username, $email, $password)
    {
        if ($this->findUser($username, $email)) {
            return array('success' => 'false','error'=> 'This user already exist!');
        } else {
            $this->insertUser($username, $email, $password);
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;
            return true;
        }
    }
}