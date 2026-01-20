<?php
//Genera numeros aleatorios entre el 1 y el 100 y muestra
//cuantos positivos y negativos hay
$countpos=0;
$countneg=0;

for($i=0;$i<=10;$i++){
    $numero=rand(-100,100);

    if($numero>0){
        $countpos++;
    }else{
        $countneg++;
    }
}
echo "<br>";
echo "Hay $countpos positivos <br>";
echo "Hay $countneg negativos";

?>