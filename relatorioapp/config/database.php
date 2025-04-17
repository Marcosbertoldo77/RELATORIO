<?php
$host = 'localhost';
$dbname = 'relatorioapp';
$user = 'root';
$pass = ''; // senha em branco no XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Mostra erros no modo dev
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
