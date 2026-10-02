<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_SERVER['DB_HOST'];
$port = $_SERVER['DB_PORT'];
$dbname = $_SERVER['DB_NAME'];
$user = $_SERVER['DB_USER'];
$password = $_SERVER['DB_PASS'];

$endpoint = 'ep-shy-rain-ac7tj2x3';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => true,
    ]);

    echo "Conectou no Neon!";
} catch (PDOException $e) {
    error_log('Erro de conexão: ' . $e->getMessage());
    die('Erro de conexão: ' . $e->getMessage());
}