<?php
$servername = "localhost";
$username = "localhost";
$password = "1111";
$dbname = "shop_db";

// MySQL 데이터베이스에 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>