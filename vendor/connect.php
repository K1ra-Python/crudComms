<?php

$db = parse_ini_file("setting.ini");

$user = $db["user"];
$pass = $db["pass"];
$name = $db["name"];
$host = $db["host"];
$type = $db["type"];

$dbh = new PDO("mysql:host=".$host.";dbname=".$name."", $user, $pass);

$sth = $dbh->query('SELECT * FROM comms');

$sth->setFetchMode(PDO::FETCH_ASSOC);
$result = $sth->fetchAll();
foreach ($result as $row) {
    //var_dump($row);
    print_r($row);
}