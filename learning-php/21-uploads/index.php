<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file" name='file'>File</label>
        <input type="file" name="file">
        
        <input type="submit" value='Send Data'>
    </form>

    <h1>List of images</h1>
    <?php

        $manager = opendir('images');
        $extensions = ['img','jpeg','jpg'];
        if($manager){
            while ($image = readdir($manager)) {
                if($image != '.' && $image != '..' && in_array(pathinfo($image, PATHINFO_EXTENSION), $extensions))
                echo "<img src='images/$image' alt='' height='50px' width='50px'>";
            }
        }

        phpinfo();
        

    ?>
</body>
</html>