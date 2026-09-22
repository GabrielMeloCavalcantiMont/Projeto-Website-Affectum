<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//se não tiver logado não entra aqui
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}

require 'config/conexao.php';

$titulo_pagina = "Meu painel";
$tipo = $_SESSION['tipo_perfil'];

require 'includes/header.php';
?>

<div class="container" style="margin-top: 40px; margin-bottom: 60px;">
    <h1 style="font-family: 'Special Gothic Expanded One', serif; color: #145780;">
        Olá, <?= htmlspecialchars($_SESSION['usuario_nome']) ?>
    </h1>
    <p style="color: #666;">
        Você fez login como <strong><?= htmlspecialchars(ucfirst($tipo)) ?></strong>
    </p>

    <hr>

    <?php

    $arquivo_dashboard = __DIR__ . '/dashboards/' . $tipo . '.php';
    if (file_exists($arquivo_dashboard)) {
        include $arquivo_dashboard;
    } else {
        echo "<p>Dashboard não encontrado para o perfil <strong>$tipo</strong>.</p>";
    }
    ?>
</div>

<?php require 'includes/footer.php'; ?>