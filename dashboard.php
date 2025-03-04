<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>
<link rel="stylesheet" href="style.css">

<h2>Bem-vindo, <?= htmlspecialchars($_SESSION["user_name"]); ?>!</h2>
<a href= "logout.php">Sair</a>
