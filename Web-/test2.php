<?php
// การเชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autoshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// เช็คการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// คำสั่ง SQL เพื่อดึงข้อมูลภาพ
$sql = "SELECT image_data FROM images WHERE id = 1";
$result = mysqli_query($conn, $sql);

// แสดงรูปภาพ
while ($row = mysqli_fetch_assoc($result)) {
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'"/>';
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>
