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
    case ($edad>=12 && $edad <=18):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Se permite la entrada a mayores de 18.
        Estas en la adolescencia";
        break;
    case ($edad >=19 && $edad<=26):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Se permite la entrada a mayores de 18.
        Estas en la juventud";
        break;
    case ($edad>=27 && $edad <=59):
        echo "Nombre: $nommbre  Edad: $edad años";
        echo "Se permite la entrada a mayores de 18.
        Estas en la adultez";
        break;
    case ($edad>=60):
         echo "Nombre: $nommbre  Edad: $edad años";
        echo "Se permite la entrada a mayores de 18.
        Estas en la vejez";
        break;
    default:
        echo "Numero no valido";






}



?>