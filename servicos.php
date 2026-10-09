<?php
    $titulo_pagina = 'Serviços';
    require 'includes/header.php';
?>

<main class="container">
    <h1>Nossos Serviços</h1>
    <p>Nosso espaço conta com psicologia, fonoaudiologia e fotografia, oferece uma variedade de serviços para ajudar indivíduos de todas as idades a melhorar sua saúde mental, emocional, suas habilidades de comunicação e suas memórias. Aqui estão alguns dos serviços comuns prestados aqui:</p>

    <!-- Aqui vai ficar os cards para cada serviço, com o botão enviando para a tela de agendamento -->
    <!-- O 1º card -->
    <div class="card" style="width: auto;">
        <img src="..." class="card-img-top" alt="Atendimento Presencial">
        <div class="card-body">
            <h5 class="card-title">Atendimento Presencial</h5>
            <p class="card-text">Um atendimento presencial é um encontro entre um dos profissional de saúde e o paciente  que ocorre fisicamente no consultório. Durante essa interação face a face, o profissional realiza uma avaliação, diagnóstico e/ou tratamento, dependendo da área de especialização, com o objetivo de fornecer cuidados de saúde ou apoio psicológico de maneira pessoal e direta. Esse tipo de atendimento permite uma comunicação interpessoal mais rica e uma avaliação mais detalhada das necessidades do paciente, contribuindo para um tratamento mais completo e eficaz.</p>
            <a href="agendamento.php" class="btn btn-primary">Agendar agora</a>
        </div>
    </div>
    <br><br>
    <!-- O 2º card -->
    <div class="card" style="width: auto;">
        <img src="..." class="card-img-top" alt="Atendimento Virtual">
        <div class="card-body">
            <h5 class="card-title">Atendimento Virtual</h5>
            <p class="card-text">Um atendimento virtual é um tipo de interação entre um profissional de saúde e o paciente que ocorre através de meios digitais, como vídeo chamadas. Durante esse atendimento, o profissional e o paciente estão fisicamente separados, mas se conectam por meio da tecnologia para fornecer ou receber serviços de saúde, tratamento, orientação ou suporte. Embora o atendimento virtual ofereça flexibilidade e conveniência, é importante observar que ele pode não ser adequado para todos os casos e condições de saúde. A eficácia do atendimento virtual pode variar dependendo do tipo de tratamento e das necessidades individuais do paciente, e em alguns casos, consultas presenciais ainda podem ser necessárias para uma avaliação completa e tratamento adequado.</p>
            <a href="agendamento.php" class="btn btn-primary">Agendar agora</a>
        </div>
    </div>
    <br><br>
    <!-- O 3º card -->
    <div class="card" style="width: auto;">
        <img src="..." class="card-img-top" alt="Atendimento Infantil">
        <div class="card-body">
            <h5 class="card-title">Atendimento Infantil</h5>
            <p class="card-text">O atendimento infantil psicológico e fonoaudiológico é um tipo de cuidado de saúde prestado a crianças para abordar questões relacionadas à saúde mental, emocional, fala, linguagem e comunicação. O tratamento pode envolver jogos, atividades interativas e estratégias educacionais, dependendo das necessidades da criança. São utilizadas diversas técnicas e exercícios para ajudar a criança a desenvolver habilidades claras e eficazes. Em ambos os casos, o atendimento infantil é adaptado para a faixa etária e as necessidades individuais da criança, proporcionando um ambiente seguro e de apoio para seu crescimento e desenvolvimento. A colaboração entre psicólogos e fonoaudiólogos também pode ser benéfica em casos em que as questões de saúde mental e comunicação estão interligadas.</p>
            <a href="agendamento.php" class="btn btn-primary">Agendar agora</a>
        </div>
    </div>
    <br><br>

</main>

<?php require 'includes/footer.php'; ?>