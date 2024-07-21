<?php

require_once "connect.php";

$name = $_POST['nameUser'];
$comment = $_POST['comment'];

try {
    $sqlQuery = 'INSERT INTO comms (name, text) VALUES (?, ?)';
    $sth = $dbh->prepare($sqlQuery);

    // Выполнение запроса с передачей значений
    $sth->execute([$name, $comment]);

    // Перенаправление обратно на страницу с комментариями
    header("Location: ../startComms.php");
    exit();
} catch (PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
