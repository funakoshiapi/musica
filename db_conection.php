<?php
// Configurações do banco de dados
$host = 'mysql.railway.internal';
$dbname = 'railway';
$username = 'root';
$password = 'KeKbyGtqoyjHqTbeenQJeDfVTSTTLflc';

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Habilitar erros do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
