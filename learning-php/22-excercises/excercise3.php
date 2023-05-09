<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="number1">Number1</label>
        <input type="number1" name='number1'><br>

        <label for="number2">number2</label>
        <input type="number2" name='number2'><br>

        <label for="operation">Select an operation to do</label>
        <select name="operation" id="">
            <option value="sum">Sum</option>
            <option value="rest">Rest</option>
            <option value="multiplicate">multiplicate</option>
            <option value="split">split</option>
        </select><br>

        <button type="submit">Make the operation</button>
    </form>
    <?php

        /* 
        Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
        * uno para sumar, restar, dividir y multiplicar.
        */

        function sum($number1, $number2){
            return $number1 + $number2;
        }

        function rest($number1, $number2){
            return $number1 - $number2;
        }

        function multiplicate($number1, $number2){
            return $number1 * $number2;
        }

        function split($number1, $number2){
            return $number1 / $number2;
        }

        if(isset($_GET['operation']) && is_string($_GET['operation']) && isset($_GET['number1']) && isset($_GET['number2']) && is_numeric($_GET['number1']) && is_numeric($_GET['number2'])){
            echo $_GET['operation']($_GET['number1'], $_GET['number2']);
        }
    ?>
</body>
</html>