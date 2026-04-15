<?php
// Railway'deki MySQL -> Variables kısmından bakarak doldur:
$host     = 'mysql.railway.internal'; // Bu hep aynıdır
$port     = '3306'; 
$db_name  = 'railway'; // Variables kısmında MYSQLDATABASE neyse o
$username = 'root';    // Variables kısmında MYSQLUSER neyse o
$password = 'RDTRTiDskejQJKkKxnqsmvfKAjVnmHoy'; // SENİN ŞİFREN (MYSQLPASSWORD)

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db_name;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 3, // 3 saniyede bağlanamazsa pes et, hata ver
    ];
    
    $db = new PDO($dsn, $username, $password, $options);
    
    // Arkadaşın diğer sayfalarda $baglan değişkenini kullanmış olabilir:
    $baglan = $db; 
    $conn = $db;

} catch (PDOException $e) {
    // Ekranda hatayı görelim ki neden bağlanmıyor anlayalım
    echo "<h1>Bağlantı Hatası!</h1>";
    echo "Detay: " . $e->getMessage();
    exit;
}
