<?php
//Generar tres numeros al azar entre el 1 y el 50 y ver cual es el mayor de los tres 
$mayor=0;
for ($i=1;$i<=3;$i++){
    $numero=rand(1,50);

    if($numero>$mayor){
        $mayor=$numero;
    }
 
}
echo "<br>";
echo "El numero mayor es $numero";

?>