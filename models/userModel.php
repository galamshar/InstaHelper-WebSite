<?php
require_once '../../config.php';
require_once '../../classes/User.php';

class userModel
{
    private DB $_db;
    private $dbconn;
    private User $currentUser;

    public function __construct()
    {
        $this->_db = new DB();
        $this->dbconn = $this->_db->getDb();
    }

    private function createUserObject()
    {
        $login = $_SESSION['username'];
        try {
            $STH = $this->dbconn->prepare('SELECT * FROM users WHERE username = :username');
            $STH->execute(array('username' => $login));
            $STHRes = $STH->fetch();
            $this->currentUser = new User($STHRes['id'], $STHRes['username'], $STHRes['password'], $STHRes['email'],
                $STHRes['role'], $STHRes['subscription_id']);
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            exit();
        }

    }

    public function getInfo()
    {
        $this->createUserObject();
        return $this->currentUser;
    }

    public function is_logged_in()
    {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            return true;
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
    }

    public function changePassword($oldpwd, $password)
    {
        $this->createUserObject();
        if ($oldpwd == $this->currentUser->getPassword()) {
            $STH = $this->dbconn->prepare('UPDATE users SET password = :password WHERE username = :username');
            $STH->execute(array('password' => $password, 'username' => $this->currentUser->getUsername()));
            return array('success' => 'true', 'error' => 'null');
        } else {
            return array('success' => 'false', 'error' => 'Incorrect password!');
        }
    }

    public function changeSubscription($subId){
        $STH = $this->dbconn->prepare('UPDATE users SET subscription_id = :subId');
        $STH->execute(array('subId' => $subId));
        return array('success' => 'true', 'error' => 'null');
}
}
