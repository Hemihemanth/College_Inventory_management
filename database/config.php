<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli('localhost','root','','inventory');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
