
<?php
$numero=$_GET["numero"];
$opciones=$_GET["opciones"];

switch($opciones){
    
    case "doblar":
        $rdo= $numero *2;
        echo "El doble de $numero es $rdo";
        break;
    
    case "cuadrado":
        $rdo= $numero *$numero;
        echo "El cuadrado de $numero es $rdo";
        break;
    
    case "cubo":
        $cubo= $numero *$numero*$numero;
        echo "El cubo de un $numero es $cubo";
        break;
    
    case "raiz":
        $raiz=sqrt($numero);
        echo "La raiz de $numero es $raiz";
        break;
    default:
        echo "Opcion no valida";
        break;

}


?>