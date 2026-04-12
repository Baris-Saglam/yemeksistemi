<?php
$host = 'db';
$username = 'root';
$password = '123';

try {
    $db_name = 'kyk_yemek_db';
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    //echo "Veritabanına başarıyla bağlanıldı!";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Veritabanı bağlantısı başarısız: " . $exception->getMessage();
}
