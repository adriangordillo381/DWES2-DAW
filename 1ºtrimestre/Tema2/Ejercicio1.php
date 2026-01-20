<?php
// Genera numeros aletorios entre 1 y 100 y muestra cuantos hay pares e impares
// e indica la suma de cada uno
$countpares=0;
$countimpares=0;
$sumapares=0;
$sumaimpares=0;

for ($i=1;$i<=10;$i++){
    $numero=rand(1,100);
    if($numero%2==0){
        echo "<br> es par  $numero";
        $countpares++;
        $sumapares = $sumapares + $numero;
    }else{
        echo "<br> no es par $numero";
        $countimpares++;
        $sumaimpares= $sumaimpares + $numero;
        
    }

}
echo "<br><br>";
echo 





?>