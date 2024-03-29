<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "users_db"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Подключение к БД
if(!$conn) {
    die("Подключение провалилось к БД" . mysqli_connect_error());
} else {
    "Успешно";
}

?>