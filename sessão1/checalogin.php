<?php

session_start();

/*$login = $_POST["login"];*/
/*$senha = $_POST["senha"];*/

$login="aula";
$senha="php";

if ($login=="aula" and $senha=="php"){
    $_SESSION["logou"]=1;
}else{
    $_SESSION["logou"]=0;
}
header("location: principal.php");