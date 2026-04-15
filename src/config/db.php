<?php
// Railway'den aldığın güncel bilgiler
$host = 'mysql.railway.internal';
$db_name = 'railway';
$username = 'root';
$password = 'RDTRTiDskejQJKkKxnqsmvfKAjVnmHoy';
$port = 3306; // Railway varsayılan MySQL portu

try {
    // Bağlantı dizesini güncelledik
    $db = new PDO("mysql:host=$host;port=$port;dbname=$db_name;charset=utf8", $username, $password);
    
    // Hata raporlamayı açalım (Geliştirme aşamasında hayat kurtarır)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Bağlantı Başarılı!"; 
} catch (PDOException $exception) {
    // Bağlantı hatası olursa burası çalışır
    echo "Veritabanı bağlantısı başarısız: " . $exception->getMessage();
}
