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

        $numero = 0;
    
        while ($numero <= 100){
            echo $numero . '<br>';
            if($numero == 100){
                echo $numero . '<br><br>';
            }
            $numero++;
        }

        do{
            $numero++;
            echo $numero . '<br>';
        }while($numero <= 150)

    ?>
</body>
</html>