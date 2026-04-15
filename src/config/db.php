<?php
$host     = 'mysql.railway.internal';
$port     = '3306';
$db_name  = 'railway';
$username = 'root';
$password = 'VNJNOoGwiBeYnLaCjUatPRSGvOOFOnPH'; // Bu şifrenin güncel olduğundan emin ol

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db_name;charset=utf8mb4";
    $db = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 5
    ]);
} catch (PDOException $e) {
    // Hata varsa ekrana yazdıralım ki gri ekranda kalmasın
    die("Bağlantı başarısız: " . $e->getMessage());
}
