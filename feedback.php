<?php
require_once 'config.php';
$db = new DB();
$_db = $db->getDb();

function sendFeedback($name,$email,$text){
    global $_db;
    $STH = $_db->prepare('INSERT INTO `feedback_requests`(`feed_name`, `feed_email`, `feed_text`) VALUES (:feedname,:email,:text)');
    $STH->execute(array('feedname'=>$name,'email'=>$email,"text"=>$text));
    if(!$STH->fetch()){
        echo "<span>Succesfully sended!</span>";
    } else {
        echo "<span>Something went wrong, try again!</span>";
    }
}
