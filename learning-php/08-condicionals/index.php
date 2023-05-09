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
    /*En resumen, este operador sirve para comparar dos valores y determinar si son distintos, incluyendo el tipo de datos. 
    Es útil en situaciones en las que se necesita asegurar que el tipo de datos sea el esperado para evitar posibles errores en el código.*/
    //jUMP to point in a document;
    goto punto2;
    $numero = 5;
    $texto = '5';

    if ($numero !== $texto){
        print_r('Son distintos datos');
    }

   



    punto2:
    echo 'Hols soyu un punto2';

    ?>
</body>
</html>