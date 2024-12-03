<?php
// Thông tin cơ sở dữ liệu
$host = 'localhost';
$dbname = 'products';
$username = 'root';
$password = '';

try {
    // Tạo đối tượng PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Thiết lập chế độ lỗi PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    // Xử lý lỗi nếu không thể kết nối
    echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
}
?>
