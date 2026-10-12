<?php
    $titulo_pagina = 'Serviços';
    $css_pagina = 'css/servicos.css';

    // Se você quiser editar algum serviço, é só mexer aqui
    // Os 3 tipos de atendimento com texto curto no card, mas com texto completo no "Saiba mais"
    $atendimentos = [
        [
            'icone'    => 'bi-building',
            'titulo'   => 'Atendimento Presencial',
            'resumo'   => 'Encontro face a face no consultório, com avaliação e acompanhamento mais completos.',
            'completo' => 'Um atendimento presencial é um encontro entre um dos profissionais de saúde e o paciente que ocorre fisicamente no consultório. Durante essa interação face a face, o profissional realiza uma avaliação, diagnóstico e/ou tratamento, dependendo da área de especialização, com o objetivo de fornecer cuidados de saúde ou apoio psicológico de maneira pessoal e direta. Esse tipo de atendimento permite uma comunicação interpessoal mais rica e uma avaliação mais detalhada das necessidades do paciente, contribuindo para um tratamento mais completo e eficaz.',
        ],
        [
            'icone'    => 'bi-camera-video',
            'titulo'   => 'Atendimento Virtual',
            'resumo'   => 'Consultas por videochamada, com flexibilidade e conveniência.',
            'completo' => 'Um atendimento virtual é um tipo de interação entre um profissional de saúde e o paciente que ocorre através de meios digitais, como videochamadas. Durante esse atendimento, o profissional e o paciente estão fisicamente separados, mas se conectam por meio da tecnologia para fornecer ou receber serviços de saúde, tratamento, orientação ou suporte. Embora o atendimento virtual ofereça flexibilidade e conveniência, ele pode não ser adequado para todos os casos e condições de saúde. A eficácia pode variar dependendo do tipo de tratamento e das necessidades individuais do paciente e, em alguns casos, consultas presenciais ainda podem ser necessárias para uma avaliação completa e tratamento adequado.',
        ],
        [
            'icone'    => 'bi-balloon-heart',
            'titulo'   => 'Atendimento Infantil',
            'resumo'   => 'Cuidado psicológico e fonoaudiológico adaptado à idade e às necessidades da criança.',
            'completo' => 'O atendimento infantil psicológico e fonoaudiológico é um tipo de cuidado de saúde prestado a crianças para abordar questões relacionadas à saúde mental, emocional, fala, linguagem e comunicação. O tratamento pode envolver jogos, atividades interativas e estratégias educacionais, dependendo das necessidades da criança, e são utilizadas diversas técnicas e exercícios para ajudar a criança a desenvolver habilidades claras e eficazes. Em ambos os casos, o atendimento é adaptado para a faixa etária e as necessidades individuais, proporcionando um ambiente seguro e de apoio para seu crescimento e desenvolvimento. A colaboração entre psicólogos e fonoaudiólogos também pode ser benéfica quando as questões de saúde mental e comunicação estão interligadas.',
        ],
    ];

    // Pequenos cards com ícones e pequenas descrições
    $psicologia = [
        ['bi-clipboard2-check', 'Avaliação Psicológica', 'Testes e avaliações para diagnosticar condições mentais, transtornos emocionais ou cognitivos.'],
        ['bi-person-heart', 'Psicoterapia Individual', 'Tratamento de questões emocionais e comportamentais em sessões individuais.'],
        ['bi-people', 'Psicoterapia de Grupo', 'Terapia em grupo, onde os participantes compartilham experiências e se apoiam.'],
        ['bi-house-heart', 'Terapia de Casal e Família', 'Orientação e tratamento para melhorar relacionamentos e resolver conflitos.'],
        ['bi-lightbulb', 'Aconselhamento de Desenvolvimento Pessoal', 'Desenvolvimento de habilidades de enfrentamento, autoestima e autoconhecimento.'],
        ['bi-cloud-sun', 'Transtornos de Ansiedade e Depressão', 'Abordagem terapêutica especializada para transtornos mentais comuns.'],
    ];

    $fono = [
        ['bi-clipboard2-pulse', 'Avaliação da Comunicação', 'Avaliação da fala, linguagem e comunicação para identificar problemas ou atrasos.'],
        ['bi-chat-dots', 'Terapia de Fala e Linguagem', 'Melhora da comunicação oral, incluindo correção de distúrbios da fala e linguagem.'],
        ['bi-soundwave', 'Avaliação Auditiva', 'Testes para avaliar a audição e identificar problemas auditivos.'],
        ['bi-headphones', 'Terapia Auditiva', 'Reabilitação auditiva para pessoas com perda auditiva.'],
        ['bi-mic', 'Avaliação e Terapia da Voz', 'Identificação e tratamento de distúrbios da voz, como rouquidão ou voz anormal.'],
        ['bi-emoji-smile', 'Comunicação Não Verbal', 'Treino de expressão facial, linguagem corporal e comunicação não verbal.'],
        ['bi-balloon', 'Distúrbios de Comunicação em Crianças', 'Apoio ao desenvolvimento da comunicação em crianças com atrasos na fala e na linguagem.'],
    ];

    require 'includes/header.php';
?>

<main class="servicos">
    <section class="servicos-intro container">
        <p class="eyebrow">Nossos serviços</p>
        <h1>Cuidado para cada fase da vida</h1>
        <p class="lead-texto">
            Nosso espaço conta com psicologia, fonoaudiologia e fotografia, e oferece uma variedade de serviços para ajudar pessoas de todas as idades a melhorar sua saúde mental, emocional, suas habilidades de comunicação e suas memórias.
        </p>
    </section>

    <!-- Tipos de atendimento -->
    <section class="container secao">
        <div class="row g-3">
            <?php foreach ($atendimentos as $i => $a): ?>
                <div class="col-12 col-md-4">
                    <article class="card-servico h-100">
                        <div class="icone"><i class="bi <?= $a['icone'] ?>" aria-hidden="true"></i></div>
                        <h2><?= htmlspecialchars($a['titulo']) ?></h2>
                        <p><?= htmlspecialchars($a['resumo']) ?></p>
                    <div class="detalhes" id="atend<?= $i ?>">
                        <div class="detalhes-conteudo">
                            <p class="texto-completo"><?= htmlspecialchars($a['completo']) ?></p>
                        </div>
                    </div>
                    <div class="acoes">
                        <button type="button" class="link-mais" aria-expanded="false" aria-controls="atend<?= $i ?>">
                            <span class="mais">Saiba mais</span><span class="menos">Mostrar menos</span>
                            <i class="bi bi-chevron-down seta" aria-hidden="true"></i>
                        </button>
                        <a href="agendamento.php" class="btn-agendar">Agendar</a>
                    </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Psicologia -->
    <section class="container secao">
        <div class="titulo-area"><i class="bi bi-heart-pulse" aria-hidden="true"></i><h2>Psicologia</h2></div>
        <div class="row g-3">
            <?php foreach ($psicologia as [$icone, $titulo, $desc]): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item-servico h-100">
                        <i class="bi <?= $icone ?>" aria-hidden="true"></i>
                        <div><strong><?= htmlspecialchars($titulo) ?></strong><span><?= htmlspecialchars($desc) ?></span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Fonoaudiologia -->
    <section class="container secao">
        <div class="titulo-area"><i class="bi bi-chat-heart" aria-hidden="true"></i><h2>Fonoaudiologia</h2></div>
        <div class="row g-3">
            <?php foreach ($fono as [$icone, $titulo, $desc]): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item-servico h-100">
                        <i class="bi <?= $icone ?>" aria-hidden="true"></i> 
                        <div><strong><?= htmlspecialchars($titulo) ?></strong><span><?= htmlspecialchars($desc) ?></span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Texto final -->
    <section class="container secao text-center">
        <p class="aviso">Os serviços variam conforme a demanda de cada paciente.</p>
        <a href="agendamento.php" class="btn-agendar grande">Agendar agora</a>
    </section>
</main>

<script>
    document.querySelectorAll('.link-mais').forEach(function (botao) {
        botao.addEventListener('click', function (){
            var alvo = document.getElementById(botao.getAttribute('aria-controls'));
            var aberto = alvo.classList.toggle('aberto');
            botao.setAttribute('aria-expanded', aberto);
        });
    });
</script>

<?php require 'includes/footer.php'; ?>

