<?php
// db.php - ไฟล์เชื่อมต่อฐานข้อมูล
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'jobe'; // ชื่อ Database ต้องตรงกับ create_table.sql

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>
