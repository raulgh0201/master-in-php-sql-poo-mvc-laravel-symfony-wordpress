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

        $number = 143324;
        $double = 900.90;
        $string = 'olakase';
        $boolean = true;
        $null = null;
        $null2;
        $array = [];

        echo gettype($number)  . '<br>';
        echo gettype($double)  . '<br>';
        echo gettype($string)  . '<br>';
        echo gettype($boolean)  . '<br>';
        echo gettype($null)  . '<br>';
        echo gettype($undefined)  . '<br>';
        echo gettype($array)  . '<br>';

        //Debug

        var_dump($array);

        //Curiosities about echo
    
        echo "We can print a variable in string with double quotes $string <br>\n ";
        echo "The \n is only visible in console and adds a new line space <br>\n ";
        echo "The \t is only visible in console and adds a new tab space <br>\n ";
        echo 'The $ can be showed here <br>  ' . "\n"  ;
        echo "This \'\$boolean asdfasdf \n";
        echo "This \'\$boolean asdfasdf \n";

         
        

    ?>
</body>
</html>