
<?php

$texto1=$_POST['texto1'];
$texto2=$_POST['texto2'];


echo "<br>";

if ($texto1 == $texto2) {

    echo 'igual';
} elseif ($texto1 != $texto2){

    echo 'diferente';
}
?>


