<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "user_registration";

// Kết nối tới cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

return $conn;
?>