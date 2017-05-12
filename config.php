<?php
include_once 'class/abstract/Database.php';
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "warsztaty4";

$conn = new mysqli($servername, $username, $password, $baseName);

if ($conn->connect_error) {
    echo "Connection failed. Error: " . $conn->connect_error;
    die;
}

$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

DataBase::$conn = $conn;