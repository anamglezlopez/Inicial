<?php
/*
crear variables e inicializar
*/

$titulo = "Mi primera pagina web";
$numero = 1;
$resultado=0;


//procesamiento

$numero++; // 2
?>
$numero=<?=$numero ?><br>


<?php
$numero+1; //2 no suma porque no lo asigna a nada

$numero=$numero+1; //3
?>
$numero=<?=$numero ?><br>
$resultado=<?=$resultado ?><br>

<?php
++$numero; // preincremento: numero vale 4 

?>
$numero=<?=$numero ?><br>
$resultado=<?=$resultado ?><br>

<?php
$resultado=++$numero;
/* 
numero es 5 y resultado es 5 */
?>
$numero=<?=$numero ?><br>
$resultado=<?=$resultado ?><br>

<?php

$resultado=$numero++;
/* 
numero es 6 y resultado es 5 */
?>
$numero=<?=$numero ?><br>
$resultado=<?=$resultado ?><br>

<?php
//cierro php para empezar con HTML
?>

<h1><?= $titulo ?></h1>

