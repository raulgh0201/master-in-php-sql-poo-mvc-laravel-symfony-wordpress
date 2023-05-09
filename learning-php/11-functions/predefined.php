<?php

// String Functions

// strlen - gets the length of a string
$string = "Hello World";
echo strlen($string) . "<br>"; // 11

// strtoupper - converts a string to uppercase
echo strtoupper($string) . "<br>"; // HELLO WORLD

// strtolower - converts a string to lowercase
echo strtolower($string) . "<br>"; // hello world

// Array Functions

// count - gets the number of elements in an array
$array = [1, 2, 3, 4, 5];
echo count($array) . "<br>"; // 5

// sort - sorts the elements in an array
sort($array);
print_r($array); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// Mathematical Functions

// pow - raises a number to a power
echo pow(2, 3) . "<br>"; // 8

// sqrt - calculates the square root of a number
echo sqrt(16) . "<br>"; // 4

// Information Functions

// phpinfo - displays information about the PHP configuration
phpinfo();

<?php

// 1. strlen - Devuelve la longitud de una cadena
$str = "Hello World";
echo strlen($str) . "<br>";

// 2. substr - Devuelve una parte de una cadena
$str = "Hello World";
echo substr($str, 6) . "<br>";

// 3. strtoupper - Convierte una cadena a mayúsculas
$str = "Hello World";
echo strtoupper($str) . "<br>";

// 4. strtolower - Convierte una cadena a minúsculas
$str = "Hello World";
echo strtolower($str) . "<br>";

// 5. date - Devuelve la fecha actual
echo date("d/m/Y") . "<br>";

// 6. rand - Devuelve un número aleatorio
echo rand(1, 100) . "<br>";

// 7. explode - Convierte una cadena en un array
$str = "Hello World";
$array = explode(" ", $str);
print_r($array);
echo "<br>";

// 8. implode - Convierte un array en una cadena
$array = array("Hello", "World");
$str = implode(" ", $array);
echo $str . "<br>";

// 9. is_numeric - Comprueba si una variable es un número
$num = 123;
$str = "Hello";
echo is_numeric($num) . "<br>";
echo is_numeric($str) . "<br>";

// 10. round - Redondea un número a un número específico de decimales
$num = 123.456;
echo round($num, 2) . "<br>";

?>


