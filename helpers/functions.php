<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "shop");

/* check connection */
if (!$db) {
    die('Ошибка подключения');
}

function login($login, $password) {
    global $db;
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE login='$login' AND password=md5('$password');");
    return mysqli_num_rows($result);
}