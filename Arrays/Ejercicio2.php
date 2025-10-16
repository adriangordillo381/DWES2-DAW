<?php
//Teniendo el siguiente array: $array = [1,2,3,4,5,6,7,8,9];
//Agrega el numero 10 al final del array y muestra el resultado
//agrega el numero 0 al principio del array y muestra el resultado
//Agrega el numero 11 en la pposicion 3 del array y muestra el resultado
//Remplaza el numero 5 por el 50 y muestra el resultado 

$array = [1,2,3,4,5,6,7,8,9];
$num=10;
array_push($array,$num);
print_r($array);
echo "<br>";

array_splice($array,0,0,0);
print_r($array);
echo "<br>";

array_splice($array,3,0,11);
print_r($array);
echo "<br>";


$array[5]=50;
print_r($array);
echo "<br>";


?>