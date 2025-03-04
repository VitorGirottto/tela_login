<?php
$host = "localhost";
$dbname = "login";
$username = "root"; // Usuário padrão do XAMPP
$password = ""; // Senha padrão no XAMPP é vazia

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
