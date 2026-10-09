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


<?php if (/*empty($consultas) comentei pra testar o visual quando tiver consulta */ false){ ?>
    <p>Você não tem consultas agendadas.</p>
    <!--Vai ter pagina de agendamento? -->
    <button id="btn-agendar" class="btn">Agendar Consulta</button>

<?php } else { ?>

<p>Aqui estão suas consultas agendadas</p>

<!-- Card de consulta -->
<section class="consultas">
    <div class="card-consulta">
        <div class="consulta-data-info">
            <div class="data-info">
                <div class="data"><img src="imagens/calendario.svg" alt=""> <span>Hoje</span></div>
                <div class="divisoria">|</div>
                <div class="hora"><img src="imagens/relogio.svg" alt=""> 14:00</div>
            </div>
            <div class="status"><img src="imagens/check.svg" alt=""> Confirmada</div>
        </div>
        <div class="consulta-detalhes-info">
            <h3>Consulta</h3>
            <p class="profissional"><img src="imagens/profissional-agenda.svg" alt=""> Dra fulana</p>
            <p class="tipo-consulta"><img src="imagens/online.svg" alt=""> Online</p>
        </div>
        <div class="consulta-botoes">
            <button>Ver detalhes</button>
            <button>Cancelar consulta</button>
        </div>
    </div>
    
    <div class="card-consulta">
        <div class="consulta-data-info">
            <div class="data-info">
                <div class="data"><img src="imagens/calendario.svg" alt=""> <span>Hoje</span></div>
                <div class="divisoria">|</div>
                <div class="hora"><img src="imagens/relogio.svg" alt=""> 14:30</div>
            </div>
            <div class="status"><img src="imagens/check.svg" alt=""> Confirmada</div>
        </div>
        <div class="consulta-detalhes-info">
            <h3>Consulta</h3>
            <p class="profissional"><img src="imagens/profissional-agenda.svg" alt=""> Dra fulana</p>
            <p class="tipo-consulta"><img src="imagens/Presencial.svg" alt=""> Presencial</p>
        </div>
        <div class="consulta-botoes">
            <button>Ver detalhes</button>
            <button>Cancelar consulta</button>
        </div>
    </div>
</section>

<?php } ?>

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
