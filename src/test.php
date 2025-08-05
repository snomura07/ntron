<?php
$host     = '192.168.137.200';
$dbname   = 'ntron';
$user     = 'ntronuser';
$password = 'ntronpass';

try {
    $dsn = "mysql:host=$host;port=3366;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    echo "✅ DB接続成功！\n";
} catch (PDOException $e) {
    echo "❌ DB接続失敗: " . $e->getMessage() . "\n";
}
