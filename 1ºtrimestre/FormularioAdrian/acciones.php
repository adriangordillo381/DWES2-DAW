<?php
// Gordillo_Bermudez_Adrian_Dic
// Programa para guardar y consultar matrículas usando un archivo de texto




// GUARDO  MATRÍCULA

// Comprobamos si el formulario se ha enviado para grabar datos
if (isset($_POST['accion']) && $_POST['accion'] === "grabar") {

    // Recogemos los datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];
    $observaciones = $_POST['observaciones'];

    // Si hay asignaturas marcadas, las unimos en un solo texto
    $asignaturas = isset($_POST['asignaturas'])
        ? implode(", ", $_POST['asignaturas'])
        : "Ninguna";

    // Creamos una línea con todos los datos
    $linea = "Nombre: $nombre | Fecha: $fecha | Sexo: $sexo | Asignaturas: $asignaturas | Observaciones: $observaciones\n";

    // Guardamos la línea en el archivo al final
    file_put_contents("matriculas.txt", $linea, FILE_APPEND);

    //  confirmación
    echo "<h2>Registro guardado correctamente.</h2>";
    echo '<a href="index.html">Volver</a>';

    
    exit;
}



// VEO TODO EL ARCHIVO


// Comprobamos si la acción es "ver"
if (isset($_GET['accion']) && $_GET['accion'] === "ver") {

    echo "<h2>Contenido completo</h2>";

    // Comprobamos si el archivo existe
    if (file_exists("matriculas.txt")) {
        // Mostramos todo el contenido del archivo
        echo "<pre>" . file_get_contents("matriculas.txt") . "</pre>";
    } else {
        echo "No hay registros.";
    }

    echo '<br><a href="index.html">Volver</a>';
    exit;
}


//Funcion extra
// FILTRAR POR ASIGNATURA


// Comprobamos si la acción es "filtrar"
if (isset($_GET['accion']) && $_GET['accion'] === "filtrar") {

    // Asignatura a buscar
    $modulo = $_GET['modulo'];

    echo "<h2>Alumnos matriculados en: $modulo</h2>";

    // Si el archivo no existe, no hay datos
    if (!file_exists("matriculas.txt")) {
        echo "No hay registros aún.";
        exit;
    }

    // Leemos el archivo línea a línea
    $lineas = file("matriculas.txt");

    // Array para guardar coincidencias
    $encontrados = [];

    // Recorremos todas las líneas
    foreach ($lineas as $linea) {
        // Si la línea contiene el módulo buscado // La función strpos() en PHP busca la posición de la primera aparición de una subcadena dentro de otra cadena.
        if (strpos($linea, $modulo) !== false) {
            $encontrados[] = $linea;
        }
    }

    // Mostramos resultados
    if (count($encontrados) > 0) {
        echo "<pre>";
        foreach ($encontrados as $alumno) {
            echo $alumno;
        }
        echo "</pre>";
    } else {
        echo "No hay alumnos matriculados en ese módulo.";
    }

    echo '<br><a href="index.html">Volver</a>';
    exit;
}
?>
