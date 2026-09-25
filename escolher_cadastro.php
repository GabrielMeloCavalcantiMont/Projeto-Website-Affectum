<!-- Peguei o que já tinha na página de login -->
<!-- Feito pra selecionar o cadastro entre -->
<!-- Profissional ou Paciente com interface-->
<?php
$titulo_pagina = 'Escolher Cadastro';
$css_pagina = 'css/login.css';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Huninn&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<div class="login-wrapper">
    <main>
        <section id="usuario" class="ativo" style="transform: translateY(0);">
            <button id="btn-profissional">
                <img src="imagens/profissional.svg" alt="">Profissional
            </button>
            <button id="btn-paciente">
                <img src="imagens/paciente.svg" alt="">Paciente
            </button>
        </section>
    </main>
</div>

<script>
    document.getElementById('btn-profissional').addEventListener('click', () => {
        window.location.href = 'cadastro.php?tipo=profissional';
    });
    document.getElementById('btn-paciente').addEventListener('click', () => {
        window.location.href = 'cadastro.php?tipo=paciente';
    });
</script>

</body>
