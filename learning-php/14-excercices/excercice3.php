<?php

/*
Excercise 3. Program that check if a variable is empty, and if is it, fill it with lowercase text and then show it uppercase and bolded.
*/

$variable = '';
if(empty($variable)){
    $variable = toLowerCase($variable);
    $variable = strtoupper($variable);
}

function toLowerCase($variable){
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz'; 

    for ($i = 0; $i < 10; $i++) { 
        $variable .= $lowercaseLetters[rand(0, strlen($lowercaseLetters))];
    }

    return $variable; 
}

echo "<b>$variable</b><br>";


/*
Ejercicio 3. Programa que compruebe si una variable esta vacia y si está vacia,
rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
*/

$texto = "";

if(empty($texto)){
   $texto = "hola yo soy el relleno de la variable texto";
   $textoMAYUS = strtoupper($texto);
           
   echo "<strong>$textoMAYUS</strong>";
}else{
   echo "La variable tiene este contenido dentro: ".$texto;
}


// Example made by ChatGPT

// Check if variable is empty
$text = '';
if (empty($text)) {
  // Fill with lowercase text
  $text = 'this is some lowercase text';
}

// Show uppercase and bolded text
echo '<strong>' . strtoupper($text) . '</strong>';

?>