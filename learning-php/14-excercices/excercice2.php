<?php

/* 
Excercise 1. Write a program that allows pushing numbers into array if the length is less than 120 and then show it.
*/

$array = [5,5,5,5];
echo showArray($array);
pushArray($array, 6);
echo showArray($array);

function pushArray($array, $number){
    if(count($array) < 120){
        array_push($array, $number);
    }
}

function showArray($array){
    $elements = '';
    foreach ($array as $element) {
        $elements .= "$element <br>";
    }

    return $elements;
}

/* 
Ejercicio 2. Escribir un programa con PHP que añada valores a un array mientras que su
longuitud sea menor a 120 y luego mostrarlo por pantalla.
 */

 $coleccion = array();

 for($i = 0; $i < 120; $i++){
     array_push($coleccion, "elemento-".$i);
 }
 
 echo $coleccion[45];

 

 // CHATGPT  Define a function to push a number into an array
  function pushNumberToArray($array, $number) {
    // Check if the length of the array is less than 120
    if (count($array) < 120) {
      // If the length is less than 120, push the number into the array
      array_push($array, $number);
    }
    // Return the updated array
    return $array;
  }
  
  // Define a function to show the array
  function showwArray($array) {
    // Loop through the array and display each element
    foreach ($array as $element) {
      echo $element . " ";
    }
  }
  
  // Create an empty array
  $numbers = array();
  
  // Push some numbers into the array using the pushNumberToArray() function
  $numbers = pushNumberToArray($numbers, 10);
  $numbers = pushNumberToArray($numbers, 20);
  $numbers = pushNumberToArray($numbers, 30);
  
  // Show the array using the showArray() function
  showwArray($numbers);

 
 





?>

