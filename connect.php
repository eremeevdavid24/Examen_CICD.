<?php
$host = "db";
$user = "root";
$password = "root";
$database = "userdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}
?>