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
    <nav class="navbar navbar-expand-lg" style="background-color: #145780" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="index.php">
                <img
                    src="imagens/AffectumLogo.jpeg"
                    alt="Affectum Logo"
                    width="80"
                    height="60"
                    class="d-inline-block align-text-top" />
            </a>

            <!-- Botão hambúrguer para mobile -->
             <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="menuPrincipal">
                <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center">

                    <?php if ($logado): ?>
                        <!-- chama o usuario pelo nome, intimidade d+ -->
                         <span style="color: #fff;">
                            Olá, <?= htmlspecialchars($_SESSION['usuario_nome'] ?? 'Usuário') ?>
                         </span>
                    <?php endif; ?>

                    <!-- agora os links das outras páginas são públicos, não são limitados apenas a quem tem login -->
                     <a href="servicos.php" class="nav-link-clean">Nossos serviços</a>
                     <a href="sobre.php" class="nav-link-clean">Sobre nós</a>
                     <a href="profissional.php" class="nav-link-clean">Profissionais</a>
                     <a href="agendamento.php" class="nav-link-clean">Agendamento</a>

                     <?php if ($logado): ?>
                        <!-- Só para usuários logados -->
                        <a href="dashboard.php" class="nav-link-clean">Minha conta</a>
                        <a href="logout.php" class="nav-link-clean">Sair</a>
                    <?php else: ?>
                        <a href="login.php" class="btn-login">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- nem body nem html são fechados, isso fica no footer -->
