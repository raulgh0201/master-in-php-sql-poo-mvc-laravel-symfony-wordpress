<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /* Make a calculator with two parameters get by get method with all operations */

        if(isset($_GET['number1']) && isset($_GET['number2'])){
            $number1 = (int)$_GET['number1'];
            $number2 = (int)$_GET['number2'];

            echo $number1 + $number2 . "<br>";
            echo $number1 - $number2 . "<br>";
            echo $number1 * $number2 . "<br>";
            echo $number1 / $number2;
        }else{
            echo 'Put the parameters in the url';
        }

    ?>
</body>
</html>