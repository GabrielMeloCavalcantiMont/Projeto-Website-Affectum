<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

function validarCPF($cpf)
{
    $cpf = preg_replace('/\D/', '', $cpf);
    if (strlen($cpf) !== 11) return false;
    if (preg_match('/^(\d)\1{10}$/', $cpf)) return false;

    for ($t = 9; $t < 11; $t++) {
        $soma = 0;
        for ($i = 0; $i < $t; $i++) {
            $soma += (int)$cpf[$i] * (($t + 1) - $i);
        }
        $digito = ((10 * $soma) % 11) % 10;
        if ((int)$cpf[$t] !== $digito) return false;
    }
    return true;
}
//variavel coringa, tá vazia mas sempre que algum pedaço precisar ela vai ter a resposta
$mensagem = '';
//so pra identificar quando clicou na pagina html se eh paciente ou psicologo
$tipo = $_GET['tipo'] ?? '';
if (!in_array($tipo, ['paciente', 'profissional'], true)) {
    die('Tipo de perfil inválido. <a href="index.php">Voltar</a>');
}

// formulario do cadastro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //conexão com o banco de dados. mudei para postgre(include muda pra require)
    require 'config/conexao.php';
    //armazena o que o usuario digita
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $cpf = trim($_POST['cpf'] ?? '');
    $crp = trim($_POST['crp'] ?? '');

    //validacoes
    if (strlen($nome) < 3) {
        $mensagem = 'Informe seu nome completo.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = 'E-mail inválido.';
    } elseif (strlen($senha) < 8) {
        $mensagem = 'A senha precisa ter pelo menos 8 caracteres.';
    } //validacao de acordo com o usuario paciente ou psicologo    
    elseif ($tipo === 'paciente' && !validarCPF($cpf)) {
        $mensagem = 'CPF inválido';
    } elseif ($tipo === 'profissional' && empty($crp)) {
        $mensagem = 'O CRP é obrigatório para profissionais.';
    } else {
        //verifica se o email já existe (prepared statement)
        $stmt = $pdo->prepare("SELECT id FROM usuario WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        //se existe acaba aqui, usa outro email pro cadastro
        if ($stmt->fetch()) {
            $mensagem = 'Este e-mail já está cadastrado.';
        } else {
            // Inicia transação para salvar em duas tabelas de forma atômica(info unica)
            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }
            $pdo->beginTransaction();

            try {
                //criptografia na senha
                $hash = password_hash($senha, PASSWORD_DEFAULT);

                $stmt = $pdo->prepare(
                    "INSERT INTO usuario (nome, email, senha_hash, tipo_perfil)
         VALUES (:nome, :email, :senha_hash, :tipo_perfil)
         RETURNING id"
                );
                $stmt->execute([
                    ':nome'        => $nome,
                    ':email'       => $email,
                    ':senha_hash'  => $hash,
                    ':tipo_perfil' => $tipo,
                ]);
                $usuario_id = $stmt->fetchColumn();

                if ($tipo === 'paciente') {
                    $cpf_limpo = preg_replace('/\D/', '', $cpf);
                    $cpf_hash  = hash('sha256', $cpf_limpo);

                    $stmt = $pdo->prepare(
                        "INSERT INTO paciente (usuario_id, cpf, cpf_hash)
             VALUES (:usuario_id, pgp_sym_encrypt(:cpf, :chave), :cpf_hash)"
                    );
                    $stmt->execute([
                        ':usuario_id' => $usuario_id,
                        ':cpf'        => $cpf_limpo,
                        ':chave'      => $_SERVER['CPF_ENCRYPTION_KEY'],
                        ':cpf_hash'   => $cpf_hash,
                    ]);
                } else {
                    $stmt = $pdo->prepare(
                        "INSERT INTO profissional (usuario_id, crp) VALUES (:usuario_id, :crp)"
                    );
                    $stmt->execute([
                        ':usuario_id' => $usuario_id,
                        ':crp'        => $crp,
                    ]);
                }

                $pdo->commit();
                $mensagem = 'Cadastro realizado com sucesso!';
            } catch (PDOException $e) {
                $erro_original = $e->getMessage();  // captura ANTES do rollback
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $mensagem = 'ERRO REAL: ' . $erro_original;
            }
        }
    }
}
?>

<!-- Estrutura de cadastro basico -->
<?php
$titulo_pagina = 'Cadastro';

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
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<!-- Só puxa se o usuario clicou pra paciente ou psicologo pra ficar escrito no h2 -->
<!-- mas não tem diferença real, é só aparencia, se na aba de psicologo o login de -->
<!-- paciente ser feito, o paciente acessa o site como paciente normalmente-->
 <div class="cadastro">

<?php if ($mensagem): ?>
    <p><?= htmlspecialchars($mensagem) ?></p>
<?php endif; ?>
<!-- Tem que mudar a aparencia desse form aqui -->
<!-- Aos que ficam com o CSS, desejo boas sortes-->
<form action="?tipo=<?= htmlspecialchars($tipo) ?>" method="POST">
    <div>
        <h2>Cadastro de <?= htmlspecialchars(ucfirst($tipo)) ?></h2>
        <a href="index.php"><img src="imagens/seta-direita.svg" alt=""></a>
    </div>
    <p>
        <input type="text" name="nome" placeholder="Nome Completo" required>
    </p>
    <p>     
        <input type="text" name="email" placeholder="E-mail" required>
    </p>
    <p>  
        <input type="password" name="senha" placeholder="Senha" required minlength="8">
    </p>
    <?php if ($tipo === 'paciente'): ?>
        <p> 
            <input type="text" name="cpf" required placeholder="CPF:000.000.000-00" maxlength="14">
        </p>
    <?php else: ?>
        <p>
            <input type="text" name="crp" required placeholder="CRP:00/000000">
        </p>
        <?php endif; ?>
        
        <div class="cadastrar-btn-container">
            <input type="submit" value="Cadastrar">
            <a href="login.php?tipo=<?= htmlspecialchars($tipo) ?>">Já tem conta? Faça login</a>
        </div>
</form>

 </div>

    </body>
