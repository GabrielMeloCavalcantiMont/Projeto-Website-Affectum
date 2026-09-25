<?php
//coisa basica, só fecha a sessão do usuário e manda pra aba login
session_start();
session_destroy();
header('Location: index.php');
exit;
?>