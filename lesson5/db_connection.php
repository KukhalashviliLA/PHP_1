<?php

$server = "localhost";
$user = "php_user";
$password = "php_user";
$db = "lesson5";

$link = mysqli_connect($server, $user, $password, $db);

/* проверка подключения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
}