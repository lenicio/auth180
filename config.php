<?php

$usuario = "root";
$senha = "dc@f0876";
$host = "localhost";
$nomeDb = "ava180";

$pdo = new PDO("mysql:host=$host;dbname=$nomeDb", $usuario, $senha);