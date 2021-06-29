<?php
$conn = new mysqli("localhost","root","","dbqrcode");

if ($conn->connect_error) {
die("connection failed: " . $conn->connect_error);
}
?>