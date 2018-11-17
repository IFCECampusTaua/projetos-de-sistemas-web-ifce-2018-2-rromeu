<?php
session_start();
if ($_SESSION["logou"]==1){
    echo "Bem-vindo ao Sistema";
}else{
    header("sessao.html");
}
