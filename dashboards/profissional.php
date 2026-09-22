<!-- tá aqui só pra preencher o buraco, não tem função real até agora-->
<?php

$stmt = $pdo->prepare("SELECT id, crp, especialidade FROM profissional WHERE usuario_id = :usuario_id LIMIT 1");
$stmt->execute([':usuario_id' => $_SESSION['usuario_id']]);
$profissional = $stmt->fetch();

//entrou na página mas não ta registrado no db
if (!$profissional):
    echo "<p>Perfil de psicologo não encontrado.</p>";
else:
    $stmt = $pdo->prepare("SELECT a.data_hora_inicio, a.modalidade, a.status, u.nome AS paciente_nome
                       FROM agendamento a INNER JOIN paciente p ON p.id = a.paciente_id 
                       INNER JOIN usuario u ON u.id = p.usuario_id WHERE a.profissional_id = :profissional_id
                       AND a.data_hora_inicio >= NOW() ORDER BY a.data_hora_inicio ASC LIMIT 10
                    ");
    $stmt->execute([':profissional_id' => $profissional['id']]);
    $atendimentos = $stmt->fetchAll();
?>

    <p><strong>CRP:</strong> <?= htmlspecialchars($profissional['crp']) ?></p>
    <p><strong>Especialidade:</strong> <?= htmlspecialchars($profissional['especialidade'] ?? 'Não informada') ?></p>
    <p>Ainda não fiz nada pra selecionar especialidade</p>
<?php
endif;
?>

<?php if (empty($atendimentos)): ?>
    <p>Você não tem atendimentos agendados.</p>

<?php else: ?>
    <table class="table">
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Paciente</th>
                <th>Modalidade</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atendimentos as $a): ?>
                <tr>
                    <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($a['data_hora_inicio']))) ?></td>
                    <td><?= htmlspecialchars($a['paciente_nome']) ?></td>
                    <td><?= htmlspecialchars(ucfirst($a['modalidade'])) ?></td>
                    <td><?= htmlspecialchars(ucfirst($a['status'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
