<!--Puxa o header.php que está com o começo do html, <head> e <body>-->
<!--Lá em baixo puxa o footer.php que fecha </body> </head>-->
<!-- Footer também tá com o Script de Bootstrap-->
<?php
$titulo_pagina = 'Inicio';
require 'includes/header.php';
?>

<!-- head e body tá aqui em cima -->
<!-- pode mandar todo conteudo da pagina aqui em baixo-->
<!-- Carrosel -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagens/entrada.jpeg" class="d-block" alt="Clínica" />
    </div>
    <div class="carousel-item">
      <img
        src="./imagens/clinica.jpeg"
        class="d-block"
        alt="Sala principal" />
    </div>
    <div class="carousel-item">
      <img
        src="./imagens/placeholder3.jpg"
        class="d-block"
        alt="Placeholder 3" />
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Carrossel infinito -->
<div class="wrap">

  <!-- Textos de entrada -->
  <div id="textos">
    <h1 id="Titulo" class="autoShow">Seja bem vindo à Affectum</h1>
    <br />
    <p id="Subtitulo" class="autoShow">
      Transformamos histórias, cuidamos de almas e damos voz à sua essência.
    </p>
  </div>

  <div class="carrossel">
    <div class="trilha">

      <!-- conjunto inicial -->
      <div class="item">
        <h2>Psicologia</h2>
        <p>
          Clareza mental, equilíbrio emocional, autoconhecimento. Encontre o
          suporte necessário para alcançar o bem-estar emocional com a ajuda
          de nossos psicólogos. Nossa equipe experiente está aqui para
          ouvir, apoiar e guiar você em sua jornada para uma vida mais
          saudável e feliz. Não hesite em dar esse passo em direção a uma
          mente mais saudável. Entre em contato conosco hoje para marcar uma
          consulta. Seu bem-estar é nossa prioridade.
        </p>
      </div>
      <div class="item">
        <h2>Fonoaudiologia</h2>
        <p>
          A voz é a nossa janela para o mundo. Se você está enfrentando
          desafios na comunicação, fala, linguagem ou audição, nossos
          fonoaudiólogos estão aqui para ajudar. Com expertise e cuidado,
          eles podem diagnosticar, tratar e aprimorar suas habilidades de
          comunicação. Não deixe que obstáculos na sua voz ou audição
          limitem sua vida. Marque uma consulta com nossos fonoaudiólogos e
          dê um passo em direção a uma comunicação mais clara e confiante.
          Sua voz é única - cuide dela com os especialistas certos.
        </p>
      </div>
      <div class="item">
        <h2>Psicanalise</h2>
        <p>
          A psicanálise é a arte de desvendar os labirintos da mente humana.
          Compreender a si mesmo é o primeiro passo em direção à cura e ao
          crescimento pessoal. Nossos profissionais altamente qualificados
          estão aqui para guiá-lo nessa jornada de autoconhecimento.
          Descubra as raízes de seus desafios emocionais, ganhe clareza e
          liberte-se das amarras do passado. A psicanálise oferece um espaço
          seguro para explorar suas profundezas interiores. Comece sua
          jornada hoje e abra portas para uma vida mais plena e consciente.
        </p>
      </div>
      <div class="item">
        <h2>Fotografia</h2>
        <p>
          A fotografia tem um poder único: o de eternizar momentos e
          emoções, capturar a essência do que somos e nos lembrar do que
          realmente importa. Ela vai além de simples imagens; é uma forma de
          arte que nos conecta com o passado, nos inspira no presente e nos
          guia para o futuro. Em nosso estúdio, acreditamos que cada momento
          é único e merece ser registrado com todo carinho e
          profissionalismo, nossa missão é transformar cada clique em uma
          lembrança inesquecível.
        </p>
      </div>

      <!-- 2º cópia idêntica, pra gerar o loop infinito -->
      <div class="item">
        <h2>Psicologia</h2>
        <p>
          Clareza mental, equilíbrio emocional, autoconhecimento. Encontre o
          suporte necessário para alcançar o bem-estar emocional com a ajuda
          de nossos psicólogos. Nossa equipe experiente está aqui para
          ouvir, apoiar e guiar você em sua jornada para uma vida mais
          saudável e feliz. Não hesite em dar esse passo em direção a uma
          mente mais saudável. Entre em contato conosco hoje para marcar uma
          consulta. Seu bem-estar é nossa prioridade.
        </p>
      </div>
      <div class="item">
        <h2>Fonoaudiologia</h2>
        <p>
          A voz é a nossa janela para o mundo. Se você está enfrentando
          desafios na comunicação, fala, linguagem ou audição, nossos
          fonoaudiólogos estão aqui para ajudar. Com expertise e cuidado,
          eles podem diagnosticar, tratar e aprimorar suas habilidades de
          comunicação. Não deixe que obstáculos na sua voz ou audição
          limitem sua vida. Marque uma consulta com nossos fonoaudiólogos e
          dê um passo em direção a uma comunicação mais clara e confiante.
          Sua voz é única - cuide dela com os especialistas certos.
        </p>
      </div>
      <div class="item">
        <h2>Psicanalise</h2>
        <p>
          A psicanálise é a arte de desvendar os labirintos da mente humana.
          Compreender a si mesmo é o primeiro passo em direção à cura e ao
          crescimento pessoal. Nossos profissionais altamente qualificados
          estão aqui para guiá-lo nessa jornada de autoconhecimento.
          Descubra as raízes de seus desafios emocionais, ganhe clareza e
          liberte-se das amarras do passado. A psicanálise oferece um espaço
          seguro para explorar suas profundezas interiores. Comece sua
          jornada hoje e abra portas para uma vida mais plena e consciente.
        </p>
      </div>
      <div class="item">
        <h2>Fotografia</h2>
        <p>
          A fotografia tem um poder único: o de eternizar momentos e
          emoções, capturar a essência do que somos e nos lembrar do que
          realmente importa. Ela vai além de simples imagens; é uma forma de
          arte que nos conecta com o passado, nos inspira no presente e nos
          guia para o futuro. Em nosso estúdio, acreditamos que cada momento
          é único e merece ser registrado com todo carinho e
          profissionalismo, nossa missão é transformar cada clique em uma
          lembrança inesquecível.
        </p>
      </div>

      <!-- 3º cópia idêntica, pra gerar o loop infinito -->
      <div class="item">
        <h2>Psicologia</h2>
        <p>
          Clareza mental, equilíbrio emocional, autoconhecimento. Encontre o
          suporte necessário para alcançar o bem-estar emocional com a ajuda
          de nossos psicólogos. Nossa equipe experiente está aqui para
          ouvir, apoiar e guiar você em sua jornada para uma vida mais
          saudável e feliz. Não hesite em dar esse passo em direção a uma
          mente mais saudável. Entre em contato conosco hoje para marcar uma
          consulta. Seu bem-estar é nossa prioridade.
        </p>
      </div>
      <div class="item">
        <h2>Fonoaudiologia</h2>
        <p>
          A voz é a nossa janela para o mundo. Se você está enfrentando
          desafios na comunicação, fala, linguagem ou audição, nossos
          fonoaudiólogos estão aqui para ajudar. Com expertise e cuidado,
          eles podem diagnosticar, tratar e aprimorar suas habilidades de
          comunicação. Não deixe que obstáculos na sua voz ou audição
          limitem sua vida. Marque uma consulta com nossos fonoaudiólogos e
          dê um passo em direção a uma comunicação mais clara e confiante.
          Sua voz é única - cuide dela com os especialistas certos.
        </p>
      </div>
      <div class="item">
        <h2>Psicanalise</h2>
        <p>
          A psicanálise é a arte de desvendar os labirintos da mente humana.
          Compreender a si mesmo é o primeiro passo em direção à cura e ao
          crescimento pessoal. Nossos profissionais altamente qualificados
          estão aqui para guiá-lo nessa jornada de autoconhecimento.
          Descubra as raízes de seus desafios emocionais, ganhe clareza e
          liberte-se das amarras do passado. A psicanálise oferece um espaço
          seguro para explorar suas profundezas interiores. Comece sua
          jornada hoje e abra portas para uma vida mais plena e consciente.
        </p>
      </div>
      <div class="item">
        <h2>Fotografia</h2>
        <p>
          A fotografia tem um poder único: o de eternizar momentos e
          emoções, capturar a essência do que somos e nos lembrar do que
          realmente importa. Ela vai além de simples imagens; é uma forma de
          arte que nos conecta com o passado, nos inspira no presente e nos
          guia para o futuro. Em nosso estúdio, acreditamos que cada momento
          é único e merece ser registrado com todo carinho e
          profissionalismo, nossa missão é transformar cada clique em uma
          lembrança inesquecível.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Textos sobre a clínica -->
<div class="view">
  <div class="block">
    <div class="block-content">
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Sobre a Affectum</h2>
        <br />
        <p id="sobre" class="autoShow">
          Bem-vindos à Clínica Affectum, um espaço de cuidado integral
          inaugurado em 1 de agosto de 2022. Aqui, acreditamos que a saúde
          emocional, psicológica e física é para todas as idades. Nossa
          equipe dedicada está comprometida em ajudar você a alcançar uma
          vida mais saudável em todos esses aspectos. Seja você uma criança,
          adulto ou idoso, estamos aqui para apoiá-lo em sua jornada para o
          bem-estar. Sua saúde é nossa prioridade.
        </p>
      </div>
      <img
        src="./imagens/placeholder4.jpg"
        alt="Clínica Affectum"
        class="block-img" />
    </div>
  </div>
  <!-- 2º texto -->
  <div class="block-right">
    <div class="block-content">
      <img
        src="./imagens/profissional1.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Kamily Castiñeiras</h2>
        <br />
        <p id="sobre" class="autoShow">
          Conheça a psicóloga Kamily, uma terapeuta cognitivo-comportamental
          com mais de uma década de experiência. Formada desde 2011, ela é
          apaixonada por auxiliar indivíduos acima de 10 anos a superar
          obstáculos emocionais. Com opções de atendimento virtual e
          presencial, Kamily está pronta para ajudar você a trilhar o
          caminho para uma mente mais saudável e equilibrada. Sua jornada de
          bem-estar começa agora, com o apoio de uma profissional dedicada e
          experiente.
        </p>
      </div>
    </div>
  </div>
  <!-- 3º texto -->
  <div class="block">
    <div class="block-content">
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Juliano Magalhães</h2>
        <br />
        <p id="sobre" class="autoShow">
          Conheça Juliano, nosso psicanalista especializado. Com opções de
          atendimento tanto virtual quanto presencial, ele está pronto para
          auxiliar indivíduos com mais de 10 anos de idade a explorar as
          complexidades da mente. Juliano oferece suporte compassivo e
          profundo para ajudar você a compreender seus pensamentos e
          emoções. Sua jornada de autodescoberta começa agora, com um
          profissional dedicado ao seu lado.
        </p>
      </div>
      <img
        src="./imagens/profissional2.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
    </div>
  </div>

  <!-- 4º texto -->
  <div class="block-right">
    <div class="block-content">
      <img
        src="./imagens/profissional3.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Daiane Vieira</h2>
        <br />
        <p id="sobre" class="autoShow">
          Conheça Daiane, nossa psicóloga experiente. Formada em 2011, ela
          está aqui para oferecer suporte emocional e ajuda no seu
          bem-estar. Com a flexibilidade do atendimento virtual e
          presencial, Daiane está pronta para ajudar você a encontrar
          equilíbrio e clareza em sua vida. Sua jornada para uma mente mais
          saudável começa com o apoio de uma profissional comprometida.
        </p>
      </div>
    </div>
  </div>

  <!-- 5º texto -->
  <div class="block">
    <div class="block-content">
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Arthur Rêgo</h2>
        <br />
        <p id="sobre" class="autoShow">
          Com mais de 15 anos de formação e experiência, minha abordagem
          terapêutica é pautada no cuidado, respeito e na compreensão de
          suas questões de forma única e acolhedora. Ao longo de minha
          carreira, tive a oportunidade de acompanhar diversas pessoas em
          suas jornadas de autodescoberta, oferecendo um espaço seguro onde
          você pode explorar suas emoções, seus pensamentos e seus
          comportamentos, sempre com confidencialidade e ética.
        </p>
      </div>
      <img
        src="./imagens/profissional4.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
    </div>
  </div>

  <!-- 6º texto -->
  <div class="block-right">
    <div class="block-content">
      <img
        src="./imagens/profissional5.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Flavia Molina</h2>
        <br />
        <p id="sobre" class="autoShow">
          Conheça Flavia Molina, uma fonoaudióloga apaixonada pelo
          desenvolvimento infantil. Sua missão é auxiliar crianças e
          adolescentes a alcançar uma comunicação eficaz. Com vasta
          experiência e dedicação, Flavia oferece suporte especializado para
          que os jovens possam superar desafios na fala, linguagem e
          comunicação, capacitando-os a se expressarem de maneira clara e
          confiante. Seu compromisso com o bem-estar e crescimento das
          crianças a torna uma aliada valiosa no desenvolvimento das
          habilidades de comunicação de seus pacientes jovens.
        </p>
      </div>
    </div>
  </div>

  <!-- 7º texto -->
  <div class="block">
    <div class="block-content">
      <div class="block-text">
        <h2 id="T-sobre" class="autoShow">Silvana Fernandes</h2>
        <br />
        <p id="sobre" class="autoShow">
          Conheça Silvana, uma fotógrafa especializada em gestantes e
          crianças, com um olhar único para capturar a essência dos momentos
          mais especiais da sua vida. Com um ambiente acolhedor e cheio de
          carinho, ela transforma cada sorriso, cada gestação e cada fase da
          infância em lembranças cheias de afeto e autenticidade. Com
          sensibilidade e dedicação, cria imagens que vão além de simples
          fotos — elas se tornam verdadeiras memórias para toda a vida.
        </p>
      </div>
      <img
        src="./imagens/profissional6.jpeg"
        alt="Clínica Affectum"
        class="block-img" />
    </div>
  </div>
</div>

<!-- script para o texto de boas vindas -->
<!-- esse script mantem aqui não vai pro footer -->
<!-- por que é especifico da pagina -->
<script>
  const alvo = document.querySelector('#textos');

  const observer = new IntersectionObserver(
    (entradas) => {
      entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
          entrada.target.classList.add('in-view');
          observer.unobserve(entrada.target);
        }
      });
    }, {
      threshold: 0.05
    }
  )

  observer.observe(alvo);
</script>
<!-- esse php no fim tá com o footer, script bootstrap, </body>, </html> -->
<?php require 'includes/footer.php'; ?>