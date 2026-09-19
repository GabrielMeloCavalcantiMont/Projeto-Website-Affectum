<!-- Peguei o que já tinha na página de login -->
<!-- Feito pra selecionar o cadastro entre -->
<!-- Profissional ou Paciente com interface-->
<?php
$titulo_pagina = 'Escolher Cadastro';
$css_pagina = 'css/login.css';
require 'includes/header.php';
?>

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

<?php require 'includes/footer.php'; ?>
