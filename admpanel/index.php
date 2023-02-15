<?php
require_once "../helpers/functions.php";

if (empty($_SESSION['user'])) {
    header("Location: http://kinder-shop.ru");
}

?>