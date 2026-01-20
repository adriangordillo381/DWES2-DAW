
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Encuesta: ¿Cuál es tu fruta favorita?</h2>
<form method="post">
    <input type="radio" name="fruta" value="">Manzana <br>
    <input type="radio" name="fruta" value="">Platano <br>
    <input type="radio" name="fruta" value="">Naranja <br>
    <input type="radio" name="fruta" value=""> Uva<br>
    <br>
    <input type="submit" value="Votar">
</form>

</body>



<?php
// gordillo_bermudez_adrian_Dicie_25 
$archivo_votos = "votos.txt";


$frutas = array("manzana", "platano", "naranja", "uva");

// Escribo los votos en el archivo
function escribir_voto($archivo_votos, $fruta) {
    
    $fp = fopen($archivo_votos, "a");
    
    
    if (!$fp) {
        echo "Error al abrir el archivo: " . $archivo_votos;
        return false;
    }
    
    
    fwrite($fp, $fruta . "\n");

    fclose($fp);
    return true;
}

// Función para leer los votos desde el archivo de votos
function leer_votos($archivo_votos) {
    
    $fp = fopen($archivo_votos, "r+b");
    
    // Si hay un error al abrir el archivo, lo mostramos y salimos de la función
    if (!$fp) {
        echo "Error al abrir el archivo: " . $archivo_votos;
        return false;
    }
    
    
    $votos = array();
    
    // Leemos todas las líneas del archivo
    while (($linea = fgets($fp)) !== false) {
    
        $fruta = rtrim($linea);
        
        // Si la fruta ya existe en el array, incrementamos su contador
        if (isset($votos[$fruta])) {
            $votos[$fruta]++;
        } else {
            
            $votos[$fruta] = 1;
        }
    }
    
    
    fclose($fp);
    return $votos;
}

// Función para determinar la fruta más votada
function obtener_fruta_más_votada($votos) {
    $fruta_más_votada = null;
    $mayor_voto = 0;
    
    // Recorremos el array de votos para encontrar la fruta con mayor número de votos
    foreach ($votos as $fruta => $voto) {
        if ($voto > $mayor_voto) {
            $mayor_voto = $voto;
            $fruta_más_votada = $fruta;
        }
    }
    
    return $fruta_más_votada;
}

// Verificamos si el archivo de votos existe
if (!file_exists($archivo_votos)) {
    // Si no existe, lo creo
    if (escribir_voto($archivo_votos, "manzana")) {
        echo "Archivo creado: " . $archivo_votos;
    }
}

// Leemos los votos
$votos = leer_votos($archivo_votos);

// Obtenemos la fruta más votada
$fruta_más_votada = obtener_fruta_más_votada($votos);


echo "La fruta más votada es: $fruta_más_votada";

?>

</html>