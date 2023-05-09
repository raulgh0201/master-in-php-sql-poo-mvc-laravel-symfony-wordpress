<?php

   $file = fopen('text.txt', 'a+');
   fwrite($file, "\nolakase");

   while (!feof($file)) {
        $content = fgets($file);
        echo "$content <br>";
   }

   copy('text.txt', 'text_copy') or die();
   rename('text.txt', 'abduscan') or die();
   unlink('abduscan') or die();

   if (file_exists('abduscan')) {
    echo 'File exists';
   } else {
    echo "Doesn't exists";
   }

   fopen('abduscan.txt', 'a+');



?>