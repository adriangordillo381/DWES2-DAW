<?php
/*gordillo_bermudez_adrian_Dicie_25 */
function generarMatrizAleatoria() {
    $matriz = array();
    for ($i = 0; $i < 5; $i++) {
        $fila = array();
        for ($j = 0; $j < 5; $j++) {
            $fila[] = rand(0, 9);
        }
        $matriz[] = $fila;
    }
    return $matriz;
}

function guardarMatriz($matriz) {
    $archivo = 'matriz.txt';
    $handle = fopen($archivo, 'w');
    
    if ($handle === false) {
        echo "Error al abrir el archivo para escribir.";
        return;
    }

    foreach ($matriz as $fila) {
        fputcsv($handle, $fila);
    }

    fclose($handle);
}

$matriz = generarMatrizAleatoria();
guardarMatriz($matriz);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Matriz 5x5 con sustitución</title>

<style>
    td{
        padding: 10px 10px 10px 10px;
        text-align: center;  /* Centra horizontalmente el contenido */
        vertical-align: middle;
    }
</style>
</head>
<body>

<h2>Matriz 5x5</h2>
<table border="1">
    <?php
    $matriz = [];
    if (file_exists('matriz.txt')) {
        $handle = fopen('matriz.txt', 'r');

        if ($handle === false) {
            echo "Error al abrir el archivo para leer.";
            return;
        }

        while (($linea = fgets($handle)) !== false) {
            $fila = str_getcsv($linea);
            $matriz[] = $fila;
        }

        fclose($handle);
    }

    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<h3>Sustituir un número por un asterisco</h3>
<form method="POST">
    Número a sustituir: <input type="number" name="numero" min="0" max="9" step="1" required>
    <button type="submit">Sustituir</button>
</form>
<a href="borrar.php">Inicializar matriz</a>
<p>La matriz se guarda y se actualiza en <strong>matriz.txt</strong></p>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = (int)$_POST['numero'];
    
    if ($numero >= 0 && $numero <= 9) {
        foreach ($matriz as &$fila) {
            foreach ($fila as &$valor) {
                if ($valor == $numero) {
                    $valor = '*';
                }
            }
        }

        guardarMatriz($matriz);
    } else {
        echo "Por favor, introduce un número entre 0 y 9.";
    }
}
?>
</body>
</html>


<?php
function borrarMatriz() {
    $archivo = 'matriz.txt';
    if (file_exists($archivo)) {
        unlink($archivo);
    }
}
?>