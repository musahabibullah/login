<?php
$host = '127.0.0.1';
$user = 'root'; // Sesuaikan dengan user MySQL Anda
$pass = ''; // Kosongkan jika tanpa password
$db_name = 'login_system';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
