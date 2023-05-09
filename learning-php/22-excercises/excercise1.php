<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?counter=1">Increment value</a>
    <a href="?counter=0">Decrement Value</a>
    <?php

        session_start();
        
        if(isset($_GET['counter']) && is_numeric($_GET['counter'])){
            $counter = $_GET['counter'];
            if($counter == 1){
                $_SESSION['counter']++;
            }elseif($counter == 0){
                $_SESSION['counter']--;
            }else{
                echo 'Number only can be 1 ore 0';
            }
            echo '<br>' . $_SESSION['counter'];
        }else{
            if(!isset($_GET['counter'])){
                echo 'Variable counter is not set';
            }elseif(!is_numeric($_GET['counter'])){
                echo 'Variable counter is not a number';
            }
        }
        
            
    ?>
</body>
</html>
