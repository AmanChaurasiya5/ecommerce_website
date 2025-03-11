<?php

$host = "localhost";
$user = "root";
$pass = "Creative@5599";

$conn = new PDO("mysql:host=$host;dbname=products", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>