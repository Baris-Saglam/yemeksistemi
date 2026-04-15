<?php
// Railway Değişkenleri (Bunları elinle yazabilirsin veya getenv kullanabilirsin)
$host     = 'mysql.railway.internal'; 
$port     = '3306'; // Railway MySQL varsayılan portu
$db_name  = 'railway';
$username = 'root';
$password = 'RDTRTiDskejQJKkKxnqsmvfKAjVnmHoy';

try {
    // ÖNEMLİ: Timeout süresini kısa tutalım ki uygulama kilitlenmesin
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 5, // 5 saniye içinde bağlanamazsan hata ver, bekleme!
    ];

    // Bağlantı dizesine portu MUTLAKA ekle
    $dsn = "mysql:host=$host;port=$port;dbname=$db_name;charset=utf8mb4";
    $db = new PDO($dsn, $username, $password, $options);

    // echo "Bağlantı başarılı!"; // Test için açabilirsin
} catch (PDOException $e) {
    // Hata olursa uygulamayı kilitleme, hatayı ekrana bas ve dur
    die("Veritabanı hatası: " . $e->getMessage());
}
