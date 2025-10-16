<?php
/*Rellena un array con 50 números aleatorios
comprendidos entre el 0 y el 99, y luego 
muéstralo en una lista desordenada.
 Para crear un número aleatorio,
 utiliza la función rand(inicio, fin)
*/
$desordenado=[];

for ($i=1; $i<=50 ; $i++) { 
    $desordenado[]=rand(0,99);

}
     print_r($desordenado);

     // Mostrar los números en una lista desordenada HTML
echo "<ul>";
foreach ($desordenado as $numero) {
    echo "<li>$numero</li>";
}
echo "</ul>"

?>