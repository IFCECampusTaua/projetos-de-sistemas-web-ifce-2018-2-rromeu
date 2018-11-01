<?php
$fatorial = $_POST['fatorial'];
$resul = 1;
for($i = $fatorial; $i >= 1; $i--){
    $resul *= $fatorial;
    $fatorial--;
}

echo "<br><br>".$resul."<br><br><br>";

?>
