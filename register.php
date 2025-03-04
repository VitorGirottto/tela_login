<?php
require 'db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Verifica se o email já existe
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $existe = $stmt->fetchColumn();

    if ($existe) {
        $mensagem = "<p class='error'>Este email já está cadastrado!<br></br></p>";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
        if ($stmt->execute([$nome, $email, $senha])) {
            $mensagem = "<p class='success'>Cadastro realizado com sucesso!<br></br></p>";
        } else {
            $mensagem = "<p class='error'>Erro ao cadastrar! Tente novamente.</p>";
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="post">
            <input type="text" name="nome" placeholder="Nome" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit" class="btn">Cadastrar</button>
        </form>
        <br></br>
        <a href='login.php'>Faça login</a>
        <?= $mensagem; ?>
    </div>
    
</body>
</html>
