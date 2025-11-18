<?php
function escribirTresNumeros($n1, $n2, $n3) {
    
    $archivo = "datosEjercicio.txt";

    
    // - Si no existe, PHP lo crea automát
    // - Si existe, lo sobreescribe
    $fichero = fopen($archivo, "w");

    // Escribimos los tres números, cada uno en una línea
    fwrite($fichero, $n1 . "\n");
    fwrite($fichero, $n2 . "\n");
    fwrite($fichero, $n3 . "\n");

    
    fclose($fichero);

    
    echo "Realizada la escritura con éxito";
}


escribirTresNumeros(10, 20, 30);
?>
