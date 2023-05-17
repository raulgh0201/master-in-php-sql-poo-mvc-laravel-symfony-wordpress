<?php
    session_start();
    require_once('includes/connect.php');

    if($_POST){
        $name = isset($_POST['name']) ? $_POST['name'] : false;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        $errors = array();

        if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
            $validatedName = true;
        }else{
            $errors['name'] =  "The name isn't valid";
        }
    
        if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){
            $validatedLastName = true;
        }else{
            $errors['lastName'] =  "The last name isn't valid";
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validatedEmail = true;
        }else{
            $errors['email'] =  "The email isn't valid";
        }

        if(!empty($password)){
            $validatedPassword= true;
        }else{
            $errors['password'] =  "The password isn't valid";
        }

        $saveUser = false;
        if(count($errors) === 0){
            $saveUser = true;
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            echo $hashedPassword = '$2y$10$vUjEDibRzfpmjP7PpZ1Lxen5BZyEBT6rpIK62YoEL/EAzFkmMAySe'; 
            if(password_verify($password, $hashedPassword)){ echo 'olakase'; }
            $query = "INSERT INTO users VALUES('.$name.','.$lastname.','.$email.','.$password.'2023-11-12)";
            mysqli_query($connection, $query);
            //Insert user into database 
        }else{
            $_SESSION['errors'] = $errors;
            
            header('Location: index.php');
        }
    }

?>