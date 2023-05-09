<?php

/* Write all odd numbers from 0 to 100 */

$number = 0;

while($number <= 100){
    if($number % 2 == 0){
        echo "$number <br>";
    }
    $number++;
}


?>