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
  <h1 id="h1"></h1>
<?php
endif;
?>

<?php if (/*empty($atendimentos)*/false): ?>
  <p>Você não tem atendimentos agendados.</p>
<?php else: ?>
  <script>
    const dataAtual = new Date();
    const anoAtual = dataAtual.getFullYear();
    let mesAtual = dataAtual.getMonth() + 1;
    const dataFormatada = `${anoAtual}-${mesAtual.length == 1 ? mesAtual = '0' + mesAtual : mesAtual}-01`;
    console.log(dataFormatada[1]);

    document.addEventListener('DOMContentLoaded', function() {
      let consultaSelecionada = null;
      const modalInfoConsulta = document.getElementById('modal-info-consulta');
      const apagarConsultaBotao = document.getElementById('apagar-consulta');

      apagarConsultaBotao.addEventListener('click', () => {
        if (!consultaSelecionada) return;

        if (confirm(`Deseja mesmo apagar: ${consultaSelecionada.title}?`)) {
          consultaSelecionada.remove();
          modalInfoConsulta.style.display = 'none';
          consultaSelecionada = null;
        }
      }); 


      let calendarEl = document.getElementById('calendar');

      let calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          right: 'prev,next',
          center: 'title',
          left: 'today',
        },
        initialDate: dataFormatada,
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        locale: 'pt-br',
        eventTimeFormat: {
          hour: 'numeric',
          minute: '2-digit',
          hour12: false
        },
        dateClick: function(info) {
          // let title = prompt('Event Title:');
          const modalAgendar = document.getElementById('modal-agenda');
          const btnModalAgendarClose = document.querySelector('#modal-agenda .close');
          btnModalAgendarClose.addEventListener('click', () => {
            modalAgendar.style.display = 'none';
          });

          modalAgendar.style.display = 'block';


          // // if (title) {
          // //   calendar.addEvent({
          // //     title: title,
          // //     start: info.start,
          // //     end: info.end,
          // //     allDay: info.allDay
          // //   })
          // }
          // calendar.unselect()
        },
        eventClick: function(info) {
          const modalInfoConsulta = document.getElementById('modal-info-consulta');
          modalInfoConsulta.style.display = 'block';
          const btnModalAgendarClose = document.querySelector('#modal-info-consulta .close');
          btnModalAgendarClose.addEventListener('click', () => {
            modalInfoConsulta.style.display = 'none';
          });
          consultaSelecionada = info.event;

          function colocaTituloeHoraNoInput(title, hora) {
            title.value = info.event.title;
            hora.value = info.event.start;
          }

          const inputTitle = document.getElementById('title-consulta');
          const inputHora = document.getElementById('hora-consulta');

          colocaTituloeHoraNoInput(inputTitle, inputHora);

          let titulo = info.event.title;
          // console.log(titulo)


        },
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [{
            title: 'Consulta: Gabriel',
            start: '2026-10-01T12:00:00'
          },
          {
            title: 'Consulta: José',
            start: '2026-10-01T13:00:00'
          },
          {
            title: 'Consulta: Caio',
            start: '2026-10-01T18:00:00'
          },
          {
            title: 'Consulta: Alan',
            start: '2026-10-01T14:00:00'
          },
          {
            title: 'Consulta: Gle',
            start: '2026-10-01T15:00:00'
          },
          {
            title: 'Consulta: Artur',
            start: '2026-10-01T16:00:00'
          },
          {
            title: 'Consulta: Riquelme',
            start: '2026-10-01T17:00:00'
          },
          {
            title: 'Consulta: Riquelme',
            start: '2026-11-01T17:00:00'
          },

        ]
      });

      calendar.render();
      document.querySelector("#calendar > div:first-child > div:first-child button").innerHTML = 'Dia Atual';
    });
  </script>
  <script src="dist/locales-all/global.js"></script>
  <div id="calendar"></div>

  <div id="modal-info-consulta" class="modal-agenda">
    <div class="close">X</div>
    <form action="">
      <input id="title-consulta" type="text" disabled>
      <input id="hora-consulta" type="text" disabled>
      <div class="buttons-info-consulta">
        <button type="button">Editar Consulta</button>
        <button type="button" id="apagar-consulta">Cancelar consulta</button>
    </form>
  </div>
  </div>

  <div id="modal-agenda" class="modal-agenda">
    <div class="close">X</div>
    <form action="">
      <h2>Agende sua consulta</h2>
      <div>
        <input type="date">
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
  <!-- <table class="table">
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
    </table> -->
<?php endif; ?>