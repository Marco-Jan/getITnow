<?php

$dsn = 'mysql:host=localhost:3306;dbname=getitnow';
$username = 'root';
$password = '';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$db = new PDO($dsn, $username, $password, $options);


if(! $db) {
    echo 'connect error';
}