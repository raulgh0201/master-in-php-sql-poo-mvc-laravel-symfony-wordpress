<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login/Register</h1>
    <form action="excercise2.php" method="get">
        <label for="email">Email</label>
        <input type="email" name="email" id="">

        <label for="Password">Password</label>
        <input type="password" name="password" id="">

        <input type="submit" value="Login">
    </form>
    <?php

        /* 
        Ejercicio 2. 
        * 1. Una función
        * 2. Validar un email con filter_var
        * 3. Recoger variable por get y validarla
        * 4. Mostrar el resultado
        */

        
        
        function validateEmail($email){
            if(str_contains($email, '.') && str_contains($email, '@')) return true;

            return false;
        }

        if(isset($_GET['email']) && !empty($_GET['email'])){
            if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){
                echo 'The email is in the correct format';
            }else{
                echo 'The email is in the wrong format';
            }
        }else{
            echo 'no data';
        }
    ?>
</body>
</html>