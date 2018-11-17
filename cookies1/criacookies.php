<?php

$nome_usuario= $_GET["nome"];
$email= $_GET["email"];

setcookie("nome", $nome_usuario, time()+7200);
setcookie("email", $email, time()+7200);

header("location: mensagem.php");

