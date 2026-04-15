<?php
$host = '127.0.0.1'; // Docker değil, yerel MySQL için
$dbname = 'kyk_yemek_db';
$username = 'root';
$password = '123'; // Eğer şifren yoksa burayı '' yap

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}
