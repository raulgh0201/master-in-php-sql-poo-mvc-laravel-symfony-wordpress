<?php
<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1,2,5,8,3,4];

// Ordenar
sort($numeros);
var_dump($numeros);

// Añadir elementos array
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

// Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
var_dump(array_reverse($numeros));

// Buscar dentro de un array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);

// Contar numero de elementos
echo sizeof($cantantes);
// array_map - applies a callback function to each element of an array
$numbers = [1, 2, 3, 4, 5];
$squared_numbers = array_map(function ($number) {
  return $number * $number;
}, $numbers);
// $squared_numbers is now [1, 4, 9, 16, 25]

// array_filter - filters elements of an array using a callback function
$numbers = [1, 2, 3, 4, 5];
$even_numbers = array_filter($numbers, function ($number) {
  return $number % 2 == 0;
});
// $even_numbers is now [2, 4]

// array_reduce - applies a callback function to reduce an array to a single value
$numbers = [1, 2, 3, 4, 5];
$sum = array_reduce($numbers, function ($carry, $number) {
  return $carry + $number;
}, 0);
// $sum is now 15

// array_column - returns the values from a single column of an array of arrays
$records = [
  ['id' => 1, 'name' => 'John Doe'],
  ['id' => 2, 'name' => 'Jane Doe'],
  ['id' => 3, 'name' => 'Jim Smith'],
];
$names = array_column($records, 'name');
// $names is now ['John Doe', 'Jane Doe', 'Jim Smith']

// array_keys - returns all the keys of an array
$fruits = ['apple' => 'red', 'banana' => 'yellow', 'cherry' => 'red'];
$keys = array_keys($fruits);
// $keys is now ['apple', 'banana', 'cherry']

// array_values - returns all the values of an array
$fruits = ['apple' => 'red', 'banana' => 'yellow', 'cherry' => 'red'];
$values = array_values($fruits);
// $values is now ['red', 'yellow', 'red']

// array_merge - merges one or more arrays into one array
$fruits1 = ['apple', 'banana'];
$fruits2 = ['cherry', 'dates'];
$fruits = array_merge($fruits1, $fruits2);
// $fruits is now ['apple', 'banana', 'cherry', 'dates']

// array_unique - removes duplicate values from an array
$fruits = ['apple', 'banana', 'cherry', 'banana'];
$unique_fruits = array_unique($fruits);
// $unique_fruits is now ['apple', 'banana', 'cherry']

// count - returns the number of elements in an array
$fruits = ['apple', 'banana', 'cherry'];
$count = count($fruits);
// $count is now 3

// sort - sorts the elements of an array in ascending order
$fruits = ['cherry', 'banana', 'apple'];
sort($fruits);
// $fruits is now ['apple', 'banana', 'cherry']

// rsort
