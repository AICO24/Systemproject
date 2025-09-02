<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$dbname = "jailmanagement_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
