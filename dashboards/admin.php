<?php

$total_pacientes = $pdo->query("SELECT COUNT(*) FROM paciente")->fetchColumn();
$total_profissionais = $pdo->query("SELECT COUNT(*) FROM profissional")->fetchColumn();
$total_usuarios = $pdo->query("SELECT COUNT(*) FROM usuario")->fetchColumn();

$ultimos = $pdo->query("SELECT nome, email, tipo_perfil, criado_em FROM usuario ORDER BY 
                        criado_em DESC LIMIT 10")->fetchAll();
?>

<h2 style="font-family: 'Special Gothic Expanded One', serif; color: #f5b55b;">
    Visão Geral
</h2>

<div class="row" style="margin-bottom: 40px;">
    <div class="col-md-4">
        <div style="background:#145780; color:#fff; padding:20px; border-radius:10px;">
            <h3><?= (int)$total_usuarios ?></h3>
            <p>Total de Usuários</p>
        </div>
    </div>
    <div class="col-md-4">
        <div style="background:#145780; color:#fff; padding:20px; border-radius:10px;">
            <h3><?= (int)$total_pacientes ?></h3>
            <p>Pacientes</p>
        </div>
    </div>
    <div class="col-md-4">
        <div style="background:#145780; color:#fff; padding:20px; border-radius:10px;">
            <h3><?= (int)$total_profissionais ?></h3>
            <p>Psicólogos</p>
        </div>
    </div>
</div>

<h2 style="font-family: 'Special Gothic Expanded One', serif; color: #f5b55b;">
    Últimos Cadastros
</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ultimos as $u): ?>
            <tr>
                <td><?= htmlspecialchars($u['nome']) ?></td>
                <td><?= htmlspecialchars($u['email']) ?></td>
                <td><?= htmlspecialchars(ucfirst($u['tipo_perfil'])) ?></td>
                <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($u['criado_em']))) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
