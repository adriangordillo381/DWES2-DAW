<?php

/*
PRACTICA FICHEROS 
Realizar una  función (tipo procedimiento,
no hay valor devuelto) denominada escribirTresNumeros que reciba tres números enteros como
parámetros y proceda a escribir dichos números en tres líneas en un archivo denominado
datosEjercicio.txt. Si el archivo no existe, debe crearlo. Una vez realizada
la operación, debe aparecer el mensaje siguiente:
*/

function escribirTresNumeros($n1, $n2, $n3) {
     $archivo=fopen("datosEjercicio.txt","w+b");

    if(file_exists("datosEjercicio.txt") == true){


        fwrite($archivo,$n1. "\n");
        fwrite($archivo,$n2 ."\n");
        fwrite($archivo,$n3 ."\n");

        echo "Realizada la escritura con exito";
    fclose($archivo);
    }
    else {
        echo "El archivo no existe";
    }


    
   
}

$n1=$_GET["numero1"];
$n2=$_GET["numero2"];
$n3=$_GET["numero3"];

escribirTresNumeros($n1, $n2, $n3);
?>
