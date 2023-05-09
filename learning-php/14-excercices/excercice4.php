<?php

/* 
Excercise 4. Create script in php that have 4 variables, one of array type, another string, int and boolean and that print a message according to the type of variable that is it.
*/

$array = [];
$string = '';
$int = 7;
$boolean = true;

echo gettype($array) . '<br>';
echo gettype($string) . '<br>';
echo gettype($int) . '<br>';
echo gettype($boolean);


/*
Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje
 * segun el tipo de variable que sea.
 
 */

$matriz = array("hola mundo", 88);
$titulo = "Master en PHP";
$numero = 77;
$verdadero = true;

if(is_array($matriz)){
	echo "<h1>El array es un array</h1>";
}

if(is_string($titulo)){
	echo "<h1>$titulo</h1>";
}

if(is_integer($numero)){
	echo "<h1>$numero</h1>";
}

if(is_bool($verdadero)){
	echo "El boleano es verdadero";
}

// Sample script created by ChatGPT

// Define variables of different types
$myArray = [1, 2, 3];
$myString = "Hello, world!";
$myInteger = 42;
$myBoolean = true;

// Check the type of each variable and print a message accordingly
if (is_array($myArray)) {
    echo "The variable \$myArray is an array.";
} else {
    echo "The variable \$myArray is not an array.";
}

echo "<br>";

if (is_string($myString)) {
    echo "The variable \$myString is a string.";
} else {
    echo "The variable \$myString is not a string.";
}

echo "<br>";

if (is_int($myInteger)) {
    echo "The variable \$myInteger is an integer.";
} else {
    echo "The variable \$myInteger is not an integer.";
}

echo "<br>";

if (is_bool($myBoolean)) {
    echo "The variable \$myBoolean is a boolean.";
} else {
    echo "The variable \$myBoolean is not a boolean.";
}
