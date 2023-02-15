<?php
require_once "../helpers/functions.php";

if (empty($_SESSION['user'])) {
    header("Location: http://kinder-shop.ru");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин kinder-shop.ru</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.webp">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<header>
    <img src="../images/logo.webp" alt="Логотип">
    <h1>Интернет-магазин kinder-shop.ru</h1>
</header>

<nav>
    <a href="../logout.php">Выйти</a>
</nav>

<main>
    <h2>Заказы</h2>
    <table>
        <tr>
            <th>№ заказа</th>
            <th>Дата и время оформления</th>
            <th>Контакты пользователя</th>
            <th>Содержание заказа</th>
            <th>Общая стоимость</th>
        </tr>
        <?php
        foreach (getOrders() as $order) {
        ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['date'] ?></td>
                <td><?= $order['contact'] ?></td>
                <td><?= $order['content'] ?></td>
                <td><?= $order['price'] ?></td>
            </tr>
       <?php } ?>

    </table>
</main>
</body>
</html>