<?php
//pagina do paciente
//busca as futuras consultas 
$stmt = $pdo->prepare("SELECT a.data_hora_inicio, a.modalidade, a.status, u.nome 
                      AS profissional_nome FROM agendamento a INNER JOIN profissional p 
                      ON p.id = a.profissional_id INNER JOIN usuario u ON u.id = p.usuario_id 
                      WHERE a.paciente_id = ( SELECT id FROM paciente WHERE usuario_id = 
                      :usuario_id) AND a.data_hora_inicio >= NOW() ORDER BY a.data_hora_inicio
                      ASC LIMIT 5
                    ");

$stmt->execute([':usuario_id' => $_SESSION['usuario_id']]);
$consultas = $stmt->fetchAll();
?>

<h2 style="font-family: 'Special Gothic Expanded One', serif; color: #f5b55b;">
    Minhas próximas consultas
</h2>

<?php if (empty($consultas)): ?>
    <p>Você não tem consultas agendadas.</p>
    <!--Vai ter pagina de agendamento? -->
    <button id="btn-agendar" class="btn">Agendar Consulta</button>

    <div id="modal-agendar" class="modal-agenda">
        <div id="modal-agendar-close" class="close">X</div>
        <form action="">
        <h2>Agende sua consulta</h2>
        <div>
            <input type="date" >
            <input type="time">
       
            <select name="" id="">
                <option value="">Selecione o profissional</option>
            </select>
            <select name="" id="">
                <option value="">Selecione o serviço</option>
            </select>
        </div>
        <input type="submit" class="botao-enviar" value="Agendar">
    </form>
    </div>

<?php endif; ?>

<hr style="margin: 40px 0;">

<h2 style="font-family: 'Special Gothic Expanded One', serif; color: #f5b55b;">
    Meus Dados
</h2>
<p><strong>Nome:</strong> <?= htmlspecialchars($_SESSION['usuario_nome']) ?></p>
<p><strong>E-mail:</strong> <?= htmlspecialchars($_SESSION['usuario_email']) ?></p>

<script>
    const btnAgendar = document.getElementById('btn-agendar');
    const modalAgendar = document.getElementById('modal-agendar');
    const btnModalAgendarClose = document.getElementById('modal-agendar-close');
    btnAgendar.addEventListener('click', () => {
        modalAgendar.style.display = 'block';
    });
    btnModalAgendarClose.addEventListener('click', () => {
        modalAgendar.style.display = 'none';
    });
</script>
