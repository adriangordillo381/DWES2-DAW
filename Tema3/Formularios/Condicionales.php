<?php


$nombre=$_GET["nombre"];
$edad=$_GET["edad"];


switch($edad){

    case ($edad<6 ):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Eres menor de edad. No se permite la entrada a menores de 18.
        Estas en la primera infancia";
        break;

    case ($edad >=6 && $edad<12):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Eres menor de edad. No se permite la entrada a menores de 18.
        Estas en la estapa infantil";
        break;
    case ($edad>=12 && $edad <18):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Eres menor de edad. No se permite la entrada a menores de 18.
        Estas en la estapa infantil";
        break;
    case ($edad >=18)
}



?>