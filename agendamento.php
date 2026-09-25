<!--Puxa o header.php que está com o começo do html, <head> e <body>-->
<!--Lá em baixo puxa o footer.php que fecha </body> </head>-->
<!-- Footer também tá com o Script de Bootstrap-->
<?php
$titulo_pagina = 'agendamento';
$css_pagina = 'css/agendamento.css';
require 'includes/header.php';
?>

<main>
    
    <form action="">
        <h1>Agendamento</h1>
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
</main>


<?php require 'includes/footer.php'; ?>