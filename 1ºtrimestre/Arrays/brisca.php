3
.<?php
/*
Realiza u programa que escoja al azar3  10 cartas de la baraja española
y que diga cuantos puntos suman segun el juego de la brisca
Emplea un array asociaativo para obtener los puntos 
segun el nombre de la carta
*/


$puntos = [
    1 => 11,
    2 => 0,
    3 => 10,
    4 => 0,
    5 => 0,
    6 => 0,
    7 => 0,
    10 => 2,
    11 => 3,
    12 => 4
];


$palos = ["oro", "copas", "espada", "bastos"];



$baraja=[];
for ($i=0; $i<count($palos); $i++) { 
    for($j=1;$j<=12;$j++){
        if($j!==8 && $j!==9){
         $baraja[]=["numero" =>$j,
                    "palos" =>$palos[$i]];   
        }
    }
}

shuffle($baraja);


$mano=[];
for ($i=1; $i <=10 ; $i++) { 
    $mano[]=$baraja[$i];

}

//Calculamos los puntos

$totalpuntos =0;

for ($i=0; $i <count($mano) ; $i++) { 
    $numero=$mano[$i]["numero"];
    $totalpuntos+=$puntos[$numero];
}
echo "Mano:<br>";
foreach($mano as $carta){
   $numero=$carta["numero"]; 
   
echo '<img src="img/' . $carta['numero'] . $carta['palos'] . '.png">';
echo "{$carta['numero']} de {$carta['palos']} que tienen {$puntos[$numero]} puntos<br>";
echo "<br>";

}


echo "El total de puntos de la mano  es $totalpuntos";