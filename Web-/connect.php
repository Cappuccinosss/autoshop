<?php

if($open_connect != 1){
    die(header('Location: form_login.php'));
}


$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'autoshop';
$port = NULL;
$socket = NULL;
$connect = mysqli_connect($hostname, $username, $password,$database);
if(!$connect){
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว : " . mysqli_connect_error($connect));
}

?>