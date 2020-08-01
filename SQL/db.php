<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "tablee";
$dsn = "mysql:host=$hostname;dbname=$dbname";

try {
    $connection = new PDO($dsn, $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}










