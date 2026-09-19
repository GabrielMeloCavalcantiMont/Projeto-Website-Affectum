<!-- Peguei o header da pagina index e separei num arquivo para padronizar-->
<!-- é a mesma coisa para todas as paginas, então é mais facil mudar um só arquivo-->
<!-- e ter o mesmo padronizado em toda pagina-->
<!-- O mesmo vai ser feito com o footer-->

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$titulo_pagina = $titulo_pagina ?? 'Affectum';
$logado = isset($_SESSION['usuario_id']);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($titulo_pagina)  ?> - Affectum</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Amethysta&family=Huninn&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Special+Gothic+Expanded+One&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/style.css" />
    <?php if (!empty($css_pagina)): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($css_pagina) ?>" />
    <?php endif; ?>
</head>

<body>
    <!--NAVBAR principal-->
    <nav class="navbar navbar-expand-lg" style="background-color: #145780">
        <div class="container-fluid">
            <a href="index.php">
                <img
                    src="imagens/AffectumLogo.jpeg"
                    alt="Affectum Logo"
                    width="100"
                    height="75"
                    class="d-inline-block align-text-top" />
            </a>
            <!-- botões de redirecionamento para a pagina de informações/logout do user -->
            <?php if ($logado): ?>
                <div class="d-flex gap-2 align-items-center">
                    <span style="color: #fff; font-family: 'Hunnin', serif;">
                        <!-- chama o usuario pelo nome, intimidade d+ -->
                        Olá, <?= htmlspecialchars($_SESSION['usuario_nome'] ?? 'Usuário') ?>
                    </span>
                    <a href="dashboard.php" class="btn">Meu Painel</a>
                    <a href="logout.php" class="btn">Sair</a>
                </div>
                <!--Botão de login-->
                <!-- Já separando o tipo de usuario-->
            <?php else: ?>
                <div class="d-flex gap-2 align-items-center">
                    <a href="escolher_cadastro.php" class="btn">Cadastre-se</a>
                    <a href="login.php" class="btn">Login</a>                    
                </div>
            <?php endif; ?>
        </div>
        </div>
    </nav>
    <!-- nem body nem html são fechados, isso fica no footer -->
