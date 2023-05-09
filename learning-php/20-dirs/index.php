<?php

    if(!is_dir('Dir')){
        mkdir('Dir', 0777) or die("Can't create the folder");
    } else{

    }  

    fopen('Dir/text1.txt', 'a+');
    fopen('Dir/text2.txt', 'a+');
    fopen('Dir/text3.txt', 'a+');

    if($manager = opendir('Dir')){
        while($file = readdir($manager)){
            if($file != '.' && $file != '..') echo "$file <br>";
        }
    }


?>