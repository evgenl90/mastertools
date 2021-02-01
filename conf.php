<?php 


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'mastertools');


$mysqli = new mysqli(HOST, USER, PASSWORD, DB);
if ($mysqli->connect_errno) {
    echo "Нет подключения к базе данных!";
    exit();
}
$mysqli->set_charset('utf8');


session_start();