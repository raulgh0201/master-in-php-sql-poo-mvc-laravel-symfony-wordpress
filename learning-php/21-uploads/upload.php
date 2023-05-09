<?php
    
    $file = $_FILES['file'];
    $name = $file['name'];
    $extension = $file['type'];
    $tmpName = $file['tmp_name'];
    $allowed_types = array('application/pdf', 'image/jpeg', 'image/jpg', 'image/avi', 'image/mp4', 'application/x-rar-compressed', 'zip');

    if(in_array($extension, $allowed_types) || in_array(pathinfo($name, PATHINFO_EXTENSION), $allowed_types)){
        if(!is_dir('images')) mkdir('images', 0777);  
        move_uploaded_file($tmpName, 'images/' . $name);
        header("Refresh: 3; url=index.php");
        echo('The image was uploaded successfully');
    }


   

    

?>