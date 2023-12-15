<?php
/* Creo 
comentario de varias lineas*/
// Este comentario solo es una linea 
$numero = 35; // variable tipo int
$texto = "Ana"; //variable tipo string

$numero = $numero + 1;
++$numero;
//numero=36

$final=$numero++;

//$numero = 37;
//$final= 36


$numero +=1;
//$numero 38

$numero +=4; //operador contraido ahorras la asignacion de la variable

//numero =42


//para mostrar resultados

echo "La variable número vale: " . $numero; 

echo "<BR>La variable final vale $final <BR>";

echo '<BR>$numero vale '.$numero ;


//solucion 


echo "<br>La variable numero vale " . $numero . "<br>";
echo "La variable numero vale $numero<br>";
echo 'La variable numero vale $numero<br>';
echo "La variable numero vale {$numero}<br>";

