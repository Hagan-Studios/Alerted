<?php

$dsn = 'mysql:host=localhost;dbname=db';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<h1 style="font-family: monospace; font-size: 2vw; text-align: center;">Database connection failed: ' . $e->getMessage() . '</h1>';
    exit();
}
