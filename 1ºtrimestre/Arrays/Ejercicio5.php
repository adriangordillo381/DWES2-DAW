<?php
/*
Genera un array aleatorio de 33 elementos con numeros comprendidos entre 0 y 100
y calcula el mayor el menor y la media 

*/
$mayor=0; 
$menor=100;
$suma=0;
for ($i=0; $i <33 ; $i++) { 
    $array[]=rand(0,100);
}
print_r($array);

for ($i=0; $i <count($array) ; $i++) {
    if($array[$i]>$mayor){
        $mayor=$array[$i];
    }
    if($array[$i]<$menor){
        $menor=$array[$i];

    }
        $suma+=$array[$i];
        $media=$suma/count($array);
    }

echo "<br>";


echo "El numero mayor es $mayor <br>";
echo "El numero menor es $menor<br>";
echo "La media es $media <br>";
?>