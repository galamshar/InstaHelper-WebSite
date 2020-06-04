<?php
require_once '../config.php';
require_once '../classes/User.php';

class loginModel
{
    private DB $_db;
    private $dbconn;
    private User $currentUser;

    public function __construct()
    {
        $this->_db = new DB();
        $this->dbconn = $this->_db->getDb();
    }

    public function getUsers()
    {
        $STH = $this->dbconn->query('SELECT * FROM users');
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        return $STH;
    }

    public function findUser($login)
    {
        try {
            $STH = $this->dbconn->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
            $STH->execute(array('username' => $login, 'email' => $login));
            return $STH->fetch();
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            exit();
        }

    }


    public function login($login, $password)
    {
        $foundedUser = $this->findUser($login);
        if ($foundedUser) {
            if ($foundedUser['password'] == $password) {
                $id = $foundedUser['id'];
                $username = $foundedUser['username'];
                $email = $foundedUser['email'];
                $role = $foundedUser['role'];
                $sub_type = $foundedUser['subscription_id'];
                $user = new User($id, $username, $password, $email, $role, $sub_type);
                $res = $user;
                $this->currentUser = $user;
                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['memberID'] = $user->getId();
                return array('success' => 'true','user' => $res);
            } else {
                return array('success' => 'false','error' => 'Incorrect password');
            }
        } else {
            return array('success' => 'false','error' => 'Incorrect login or email');
        }
    }
}