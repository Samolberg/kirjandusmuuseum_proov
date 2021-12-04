<?php


$servername = "localhost";
$username = "root";
$password = "qwerty";
$datab = "kirjandusm";


$conn = new mysqli($servername, $username, $password, $datab);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}