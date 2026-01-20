<?php
//Escribe un programa que genere 20 numeros aleatorios en un array.
//Muestra los pares primero antes que los impares por pantalla 
$arraynumeros= array();
$arraypar= array();
$arrayimpar=array();
for ($i=0;$i<=20;$i++){
    $num=rand(1,100);
  array_push($arraynumeros,$num);
}
  for ($j=0;$j< count($arraynumeros);$j++ )
    if($arraynumeros[$j]%2==0){
        array_push($arraypar,$arraynumeros[$j]);
        
    }else{
                array_push($arrayimpar,$arraynumeros[$j]);

    }

    for ($n=0;$n<count($arraypar);$n++){
            echo "Los numeros pares es $arraypar[$n]<br> ";
    }

    for ($n=0;$n<count($arraypar);$n++){
            echo "Los numero impares es $arrayimpar[$n]<br> ";
    }

?>