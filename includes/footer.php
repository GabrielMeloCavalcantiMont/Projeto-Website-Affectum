<!-- mesma coisa do header, arquivo separado para padronizar em todas pags-->
<?php
// includes/footer.php é o caminho pra cá, tá em outros arquivos se precisar
?>
<!-- Footer padrão -->
<footer class="footer d-print-none" style="padding-top: 30px">
    <div class="footer-content">
        <div class="container">
            <div class="text-center mb-3">
                <img
                    src="imagens/AffectumLogo.jpeg"
                    alt="Affectum Logo"
                    width="100"
                    height="80" />
            </div>
            <br /><br />

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h3>NAVEGAÇÃO</h3>
                    <hr style="color: white" />
                    <ul>
                        <!-- Mudei tudo pra php se não o link não roda-->
                        <li><a href="index.php">Início</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="#">Profissionais</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4">
                    <h3>CONTATOS</h3>
                    <hr style="color: white" />
                    <ul>
                        <li>contato@affectumsp.com.br</li>
                        <li>(11) 98033-1132</li>
                        <li>
                            <a
                                href="https://maps.app.goo.gl/kTpLyXi8yivA8wWw5"
                                target="_blank"
                                rel="noopener noreferrer">
                                Av. Rubens Montanaro de Borba, 271 Interlagos - São Paulo -
                                SP - Brasil
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4">
                    <h3>REDES SOCIAIS</h3>
                    <hr style="color: white" />
                    <ul>
                        <li>
                            <a
                                href="https://www.instagram.com/affectum_sp"
                                target="_blank"
                                rel="noopener noreferrer">Instagram</a>
                        </li>
                        <li>
                            <a
                                href="https://www.facebook.com/people/Affectum/100083590150027/"
                                target="_blank"
                                rel="noopener noreferrer">Facebook</a>
                        </li>
                        <li>
                            <a
                                href="https://api.whatsapp.com/send/?phone=%2B5511980331132&text&type=phone_number&app_absent=0"
                                target="_blank"
                                rel="noopener noreferrer">WhatsApp</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom text-center">
                <p>&copy; 2026 Affectum. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Script do Bootstrap -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous">
</script>
<!-- tudo fechadinho aqui-->
</body>

</html>