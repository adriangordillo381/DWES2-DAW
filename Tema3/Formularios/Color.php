<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="est.css">
</head>
<body style="background-color:

<?php

$opciones=$_GET["opciones"] ?? "Blanco";

switch($opciones){

    case "Blanco":
        echo"white";
        break;
    case "Rojo":
        echo"red";
        break;
    case "Verde Lima":
        echo"green";
        break;
    case "Azul":
        echo"blue";
        break;
    case "Amarillo":
        echo"yellow";
        break;
    case "Cian":
        echo"cyan";
        break;
    case "Fucsia":
        echo"purple";
        break;
    case "Negro":
        echo"Black";
        break;
    default:
        echo "white";
    break;

}



?>;">

    <form action="Color.php" method="get">
    <h2>Elegir fondo </h2>
    <label for="colores">Elegir fondo</label>
    <select name="opciones" id="opciones">
        <option value="Blanco">Blanco</option>
        <option value="Rojo">Rojo</option>
        <option value="Verde Lima">Verde Lima</option>
        <option value="Azul">Azul</option>
        <option value="Amarillo">Amarillo</option>
        <option value="Cian">Cian</option>
        <option value="Fucsia">Fucsia</option>
        <option value="Negro">Negro</option>

    </select>
    <input type="submit" value="Cambiarcolor">
    </form>
</body>
</html>