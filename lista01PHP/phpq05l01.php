<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota3 = $_POST["nota4"];

$total = 0;
media($nota1, $nota2, $nota3,$nota4);

echo "Nome: ".$nome;
echo "<br>";
echo "Média: ".$total;
echo "<br>";

echo "Média: ".number_format($total, 1, '.', ' ');


function media($n1, $n2, $n3, $n4){
    global $total;
    $total = ($n1 + $n2 + $n3 + $n4)/3;


    if (media > 7)
        echo "Aprovado";
        elseif (media < 7)
            echo "Reprovado";
}
?>