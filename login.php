<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit();
}

$mensagem = '';
$aba_ativa = $_GET['tipo'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config/conexao.php';
    //só email e senha, separar por cpf ou código/crp complica minha situação
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    if ($email && $senha) {
        $stmt = $pdo->prepare("SELECT id, nome, email, senha_hash, tipo_perfil FROM usuario WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
            // se as informações de login estão de acordo com o banco de dados
            // traz as informações do usuário dessa sessão id, nome, email e tipo_perfil(paciente/psicologo)
            $_SESSION['usuario_id']    = $usuario['id'];
            $_SESSION['usuario_nome']  = $usuario['nome'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['tipo_perfil']   = $usuario['tipo_perfil'];
            // Redireciona pro dashboard
            header('Location: dashboard.php');
            exit;
        } else {
            //a informação não bate com o que tá no db
            $mensagem = 'Senha ou e-mail incorretos.';
        }
    } else {
        //deixou algo em branco
        $mensagem = 'Preencha todos os campos.';
    }
}

$titulo_pagina = 'Login';
$css_pagina = 'css/login.css';
require 'includes/header.php';
?>

<div class="login-wrapper">
    <main>
        <section id="usuario">
            <button id="btn-profissional"><img src="imagens/profissional.svg" alt="">Profissional</button>
            <button id="btn-paciente"><img src="imagens/paciente.svg" alt="">Paciente</button>
        </section>

        <?php if ($mensagem): ?>
            <div style="max-width: 400px; margin: 20px auto; padding: 10px;
                        background: #f8d7da;color: #721c24; border-radius: 8px;
                        font-family: 'Huninn', serif; text-align: center;">
                <?= htmlspecialchars($mensagem) ?>
            </div>

        <?php endif; ?>

        <section class="login-usuario" id="login-profissional">
            <img class="fundo" src="imagens/fundo.png" alt="">
            <div class="login">
                <!-- Login padrão pra qualquer usuario-->
                <div class="titulo-usuario">
                    <h1>Bem vindo profissional</h1>
                </div>
                <!-- forms atualizados -->
                <form method="POST" action="login.php?tipo=profissional">
                    <h2>Entrar</h2>
                    <input placeholder="E-mail" type="email" name="email" required>
                    <input placeholder="Senha" type="password" name="senha" required>
                    <input class="entrar" value="Entrar" type="submit">
                    <div>
                        <img src="imagens/AffectumLogo-semFundo.png" alt="">
                    </div>
                </form>
            </div>
        </section>

        <section class="login-usuario" id="login-paciente">
            <img class="fundo" src="imagens/fundo.png" alt="">
            <div class="login">
                <div class="titulo-usuario">
                    <h1>Bem vindo Paciente</h1>
                </div>
                <form method="POST" action="login.php?tipo=paciente">
                    <h2>Entrar</h2>
                    <input placeholder="E-mail" type="email" name="email" required>
                    <input placeholder="Senha" type="password" name="senha" required>
                    <input class="entrar" value="Entrar" type="submit">
                    <div>
                        <img src="imagens/AffectumLogo-semFundo.png" alt="">
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>

<script>
    const btnProfissional = document.getElementById('btn-profissional');
    const btnPaciente = document.getElementById('btn-paciente');
    const loginProfissional = document.getElementById("login-profissional");
    const loginPaciente = document.getElementById("login-paciente");
    const usarioMenuLogin = document.getElementById('usuario');

    btnProfissional.addEventListener('click', () => {
        loginProfissional.classList.add('ativo');
        loginPaciente.style.display = 'none';
        usarioMenuLogin.classList.add('ativo');
        loginProfissional.querySelector('img').classList.add('ativo');
        history.pushState({}, '', 'login.php?tipo=profissional');
    });
    btnPaciente.addEventListener('click', () => {
        loginPaciente.classList.add('ativo');
        loginProfissional.style.display = 'none';
        usarioMenuLogin.classList.add('ativo');
        loginPaciente.querySelector('img').classList.add('ativo');
        history.pushState({}, '', 'login.php?tipo=paciente');
    });

    const abaInicial = "<?= htmlspecialchars($aba_ativa) ?>";
    if (abaInicial === 'profissional') {
        btnProfissional.click();
    } else if (abaInicial === 'paciente') {
        btnPaciente.click();
    }
</script>

<?php require 'includes/footer.php'; ?>