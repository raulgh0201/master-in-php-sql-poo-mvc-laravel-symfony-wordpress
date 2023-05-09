<?php
/*
  Create an array with the contents of the table:
  ACTION ADVENTURE  SPORTS
  GTA    ASSASSINS  FIFA 19
  CODE   CRASH      PES 19
  PUGB   Prince of  MOTO GP 19
         Persia
 
Each row must go in a separate file (includes).
*/

$games = [
   'action' => include 'excercise5-includes/action.php',
   'adventures' =>  include 'excercise5-includes/adventures.php',
   'sports' => include 'excercise5-includes/sports.php'
];

print_r($games);


/* 
 Crear un array con el contenido de la tabla:
 ACCION   AVENTURA   DEPORTES
 GTA      ASSASINS    FIFA 19
 COD      CRASH       PES 19
 PUGB     Prince of   MOTO GP 19
          persia
 
Cada fila debe ir en un fichero separado(includes).
 */

 $tabla = array(
	"ACCION"   => array("GTA 5", "Call of Duty", "PUGB"),
	"AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
	"DEPORTES" => array("Fifa 19", "PES 19", "Moto G 19")
);

$categorias = array_keys($tabla);
?>

<table border="1">
	<?php require_once 'ejercicio5/encabezados.php'; ?>
	<?php require_once 'ejercicio5/primera.php'; ?>
	<?php require_once 'ejercicio5/segunda.php'; ?>
	<?php require_once 'ejercicio5/tercera.php'; ?>	
</table>

