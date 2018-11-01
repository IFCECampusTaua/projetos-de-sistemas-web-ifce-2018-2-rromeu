<?php

$altura=$_POST['altura'];
$sexo=$_POST['sexo'];

echo "<br>";

if ($sexo== 'm') {

    $IMC = ((72.7 * $altura) - 58);
    echo "peso ideal para homens:<br>".$IMC;
}

if ($sexo=='f'){

    $IMM=((62.1 * $altura)-44.7);
    echo "peso ideal para mulheres:<br>".$IMM;
}


?>
