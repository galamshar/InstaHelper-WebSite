<?php
ob_start();
session_start();
//Database settings
define('DBHOST', 'localhost');
define('DBUSERNAME', 'galamshar');
define('DBPASSWORD', '0000');
define('DBNAME', 'instahelper');

//Create DB connection
class DB
{
    private $db;

    public function __construct()
    {
        try {
            //create PDO connection
            $this->db = new PDO("mysql:host=" . DBHOST . ";charset=utf8mb4;dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            //show error
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
            return null;
            exit;
        }
    }


    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }
}

