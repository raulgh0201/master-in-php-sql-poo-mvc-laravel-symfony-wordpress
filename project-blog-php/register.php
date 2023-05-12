<?php
    session_start();

    if($_POST){
        $name = isset($_POST['name']) ? $_POST['name'] : false;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        $errors = Array();

        if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
            $validatedName = true;
        }else{
            $errors['name'] =  "The name is't valid";
        }
    
        if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){
            $validatedLastName = true;
        }else{
            $errors['lastName'] =  "The name is't valid";
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validatedEmail = true;
        }else{
            $errors['email'] =  "The name is't valid";
        }

        if(!empty($lastname)){
            $validatedLastName = true;
        }else{
            $errors['lastName'] =  "The password is't valid";
        }

        $saveUser = false;
        if(count($errors) === 0){
            $saveUser = true;
            $query = "insert into users(" .$name. "," .$lastname. "," .$email. "," .$password. ")";
            //Insert user into database 
        }else{
            $_SESSION['errors'] = $errors;
            
            header('Location: index.php');
        }
    }

?>