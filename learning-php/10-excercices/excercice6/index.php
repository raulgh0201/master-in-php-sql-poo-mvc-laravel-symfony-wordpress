<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border=1>
        <tr>
            <th>Table 1</th><ht>
            <th>Table 2</th>
            <th>Table 3</th>
            <th>Table 4</th>
            <th>Table 5</th>
            <th>Table 6</th>
            <th>Table 7</th>
            <th>Table 8</th>
            <th>Table 9</th>
            <th>Table 10</th>
        </tr>

        <?php
        /*Show the multiplication table of numbers from 1 to 10*/
            for ($table = 1; $table <= 10 ; $table++) { 
                echo '<tr>';
                    for ($number = 1; $number <= 10 ; $number++){ 
                        $multiplication = $table * $number;
                        echo "<td> $table * $number = $multiplication</td>";
                    }
                echo '</tr>';           
            }    
        ?>

    </table>
    
</body>
</html>
