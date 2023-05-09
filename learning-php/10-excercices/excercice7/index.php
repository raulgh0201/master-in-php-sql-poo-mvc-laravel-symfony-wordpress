<?php

    /* Show all  odd numbers that are beetween two that are passed by url */
    if(isset($_GET['number1']) && isset($_GET['number2'])){
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];

        if($number1 < $number2){
            for ($i = $number1; $i <= $number2; $i++) { 
                if($i % 2 != 0) echo "$i <br>";
            }
        }else{
            echo "<h1>Number1 must be smaller than number2</h1>";
        }      
    }else{
        echo "<h1> Pass the number in the url </h1>";
    }

?>