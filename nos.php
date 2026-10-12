<?php
    $titulo_pagina = 'Nós';
    $css_pagina = 'css/nos.css';

    require 'includes/header.php';
?>

<main>

<section class="sobre-intro">
    <h1>Quem somos</h1>
    <p>A Clínica Affectum é um espaço único, composta por uma equipe de psicólogos e fonoaudiólogos dedicados ao seu bem-estar. Nossa missão é proporcionar cuidado abrangente para sua saúde mental e comunicação. Combinando a expertise da psicologia e fonoaudiologia, estamos comprometidos em ajudá-lo a alcançar um equilíbrio emocional e uma comunicação mais clara. Sua jornada para uma vida mais saudável começa aqui, na Clínica Affectum.</p>
</section>

<section class="sobre-fundadores">
        <p><strong>Nós somos a equipe apaixonada por trás da Clínica Affectum, um espaço dedicado ao cuidado da saúde mental e emocional. Fundada em agosto de 2022 por Kamily, uma experiente psicóloga com mais de 10 anos de prática, e seu esposo Juliano, um renomado psicanalista, nossa clínica é o resultado de uma visão compartilhada de proporcionar um ambiente acolhedor e compassivo para todos que buscam bem-estar. Juntos, trazemos nossa expertise em psicologia e psicanálise para ajudar indivíduos de todas as idades a enfrentar desafios emocionais, desenvolver autoconhecimento e alcançar uma vida mais saudável emocionalmente, psicologicamente e fisicamente. Nossa missão é oferecer suporte emocional, promovendo a cura e o crescimento pessoal. Na Clínica Affectum, acreditamos que a saúde mental é para todos, independentemente da idade, e estamos aqui para apoiá-lo em sua jornada rumo a uma vida mais equilibrada e significativa.</strong></p>
</section>

<section class="linha-tempo">
    <article class="marco">
        <span class="marco__ano">2008</span>
        <h2>Um sonho</h2>
        <p>Desde 2008, um sonho começou a tomar forma e crescer dentro da psicóloga Kamily. Esse sonho era o de abrir uma clínica que não fosse apenas um local de tratamento, mas um espaço de acolhimento caloroso e empatia genuína pelos nossos pacientes.</p>
    </article>

    <article class="marco">
        <span class="marco__ano">2022</span>
        <h2>Uma realização</h2>
        <p>Desde 01/08/2022, esse sonho se tornou realidade na Clínica Affectum. Cada passo, cada esforço, desde o primeiro pensamento até a inauguração, foi moldado pelo desejo profundo de oferecer um lugar onde as pessoas se sintam verdadeiramente ouvidas e compreendidas.</p>
    </article>

    <article class="marco">
        <span class="marco__ano">Hoje</span>
        <h2>O Hoje</h2>
        <p>Na Clínica Affectum, não vemos apenas pacientes; vemos indivíduos únicos com suas histórias, emoções e necessidades. Nosso compromisso é oferecer cuidado de qualidade, orientado pela empatia, respeito e compreensão. Seu bem-estar é a nossa prioridade, e estamos aqui para ajudar você a trilhar o caminho para uma vida mais saudável e equilibrada. O nosso sonho é, agora, fazer parte da sua jornada para o bem-estar.</p>
    </article>
</section>

<!-- Card dos profissionais -->
<section class="equipe">
    <h2>Nossa equipe</h2>

    <div class="equipe-grade">

        <!-- card 1 -->
         <article class="card-prof">
            <img src="./imagens/profissional1.jpeg" alt="Kamily Castiñeiras" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Kamily Castiñeiras</h3>
                <p class="card-prof__funcao">Psicóloga</p>
                <p class="card-prof__texto">
                    Uma terapeuta cognitivo-comportamental com mais de uma década de experiência. Formada desde 2011, ela é apaixonada por auxiliar indivíduos acima de 10 anos a superar obstáculos emocionais. Com opções de atendimento virtual e presencial, Kamily está pronta para ajudar você a trilhar o caminho para uma mente mais saudável e equilibrada. Sua jornada de bem-estar começa agora, com o apoio de uma profissional dedicada e experiente.
                </p>

                <ul class="redes">
                    <li><a href="mailto:kamily_lc@hotmail.com" target="_blank" class="redes__btn redes__btn--email"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=%2B5511980331132&text&type=phone_number&app_absent=0" target="_blank" class="redes__btn redes__btn--whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://web.facebook.com/psicologakamily/?_rdc=1&_rdr" target="_blank" class="redes__btn redes__btn--facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/psicologakamily" target="_blank" class="redes__btn redes__btn--instagram"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
         </article>
        
        <!-- card 2 -->
         <article class="card-prof">
            <img src="./imagens/profissional2.jpeg" alt="Juliano Magalhães" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Juliano Magalhães</h3>
                <p class="card-prof__funcao">Psicanalista</p>
                <p class="card-prof__texto">
                    Com opções de atendimento tanto virtual quanto presencial, ele está pronto para auxiliar indivíduos com mais de 10 anos de idade a explorar as complexidades da mente. Juliano oferece suporte compassivo e profundo para ajudar você a compreender seus pensamentos e emoções. Sua jornada de autodescoberta começa agora, com um profissional dedicado ao seu lado.
                </p>

                <ul class="redes">
                    <li><a href="mailto:juliano_01mv@yahoo.com.br" target="_blank" class="redes__btn redes__btn--email"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=%2B5511962200727&text&type=phone_number&app_absent=0" target="_blank" class="redes__btn redes__btn--whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://www.instagram.com/psicanalise_juliano" class="redes__btn redes__btn--instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
         </article>

        <!-- card 3 -->
         <article class="card-prof">
            <img src="./imagens/profissional3.jpeg" alt="Daiane Vieira" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Daiane Vieira</h3>
                <p class="card-prof__funcao">Psicóloga</p>
                <p class="card-prof__texto">
                    Formada em 2011, ela está aqui para oferecer suporte emocional e ajuda no seu bem-estar. Com a flexibilidade do atendimento virtual e presencial, Daiane está pronta para ajudar você a encontrar equilíbrio e clareza em sua vida. Sua jornada para uma mente mais saudável começa com o apoio de uma profissional comprometida.
                </p>

                <!-- <ul class="redes">
                    <li><a href="#" class="redes__btn redes__btn--email"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--instagram"><i class="fa-brands fa-instagram"></i></a></li>
                </ul> -->
            </div>
         </article>

        <!-- card 4 -->
         <article class="card-prof">
            <img src="./imagens/profissional4.jpeg" alt="Arthur Rêgo" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Arthur Rêgo</h3>
                <p class="card-prof__funcao">Psicólogo</p>
                <p class="card-prof__texto">
                    Com mais de 15 anos de formação e experiência, minha abordagem terapêutica é pautada no cuidado, respeito e na compreensão de suas questões de forma única e acolhedora. Ao longo de minha carreira, tive a oportunidade de acompanhar diversas pessoas em suas jornadas de autodescoberta, oferecendo um espaço seguro onde você pode explorar suas emoções, seus pensamentos e seus comportamentos, sempre com confidencialidade e ética.
                </p>

                <!-- <ul class="redes">
                    <li><a href="#" class="redes__btn redes__btn--email"><i class="fa-regular fa-envelope"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" class="redes__btn redes__btn--instagram"><i class="fa-brands fa-instagram"></i></a></li>
                </ul> -->
            </div>
         </article>

        <!-- card 5 -->
         <article class="card-prof">
            <img src="./imagens/profissional5.jpeg" alt="Flavia Molina" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Flavia Molina</h3>
                <p class="card-prof__funcao">Fonoaudióloga</p>
                <p class="card-prof__texto">
                    Sua missão é auxiliar crianças e adolescentes a alcançar uma comunicação eficaz. Com vasta experiência e dedicação, Flavia oferece suporte especializado para que os jovens possam superar desafios na fala, linguagem e comunicação, capacitando-os a se expressarem de maneira clara e confiante. Seu compromisso com o bem-estar e crescimento das crianças a torna uma aliada valiosa no desenvolvimento das habilidades de comunicação de seus pacientes jovens.
                </p>

                <ul class="redes">
                    <li><a href="https://www.instagram.com/fono.flaviamolina" target="_blank" class="redes__btn redes__btn--instagram"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
         </article>

         <!-- card 6 -->
         <article class="card-prof">
            <img src="./imagens/profissional6.jpeg" alt="Silvana Fernandes" class="card-prof__foto">

            <div class="card-prof__corpo">
                <h3>Silvana Fernandes</h3>
                <p class="card-prof__funcao">Fotógrafa</p>
                <p class="card-prof__texto">
                    Conheça Silvana, uma fotógrafa especializada em gestantes e crianças, com um olhar único para capturar a essência dos momentos mais especiais da sua vida. Com um ambiente acolhedor e cheio de carinho, ela transforma cada sorriso, cada gestação e cada fase da infância em lembranças cheias de afeto e autenticidade. Com sensibilidade e dedicação, cria imagens que vão além de simples fotos — elas se tornam verdadeiras memórias para toda a vida.
                </p>

                <ul class="redes">
                    <li><a href="https://api.whatsapp.com/send/?phone=%2B5511992856523&text&type=phone_number&app_absent=0" target="_blank" class="redes__btn redes__btn--whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
         </article>

    </div>
</section>
</main>

<?php
    
    require 'includes/footer.php';
?>