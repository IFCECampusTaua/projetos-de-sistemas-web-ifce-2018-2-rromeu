
<?php
$texto = "eu não sou besta pra tirar onda de herói";

echo substr($texto, 0, 16);  // eu não sou besta
echo "<br>";
echo substr($texto, 11);     // besta pra tirar onda de herói
echo "<br>";
echo substr($texto, 11, 9);  // besta pra
echo "<br>";
echo substr($texto, -5);     // herói
echo "<br>";
?>

