<?php
    //Made by chatgpt
    if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $_POST['name']) || !preg_match("/^[a-zA-Z\s]{2,50}$/", $_POST['last_name'])) {
        $errors[] = "Please enter a valid name and last name.";
    }
    //

    if(isset($_POST['name']) && isset($_POST['lastname'])){
        $data = [$_POST['name'], $_POST['lastname']];

        if(isValidName($data)){
            header('Location: index.php?correct=Send Succesfully!');
        }else{
            header('Location: index.php?error=The information is wrong, verify the format');
        }
    }else{
        header('Location: index.php?error= The information is wrong, verify the format');
    }

    function isValidName($data){
        foreach ($data as $value) {
            if(!preg_match('/^[a-zA-Z\s]{2,50}$/', $value)) return false;
        }   

        return true;
    }

    



    // Made by chatgpt 
    //Define regex patterns for name and lastname validation
    $namePattern = "/^[a-zA-Z]+$/";
    $lastnamePattern = "/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";
    
    // Get the name and lastname values from the form
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    
    // Validate the name and lastname using the regex patterns
    if (!preg_match($namePattern, $name)) {
        // Name is not in the correct format
        echo "Error: Please enter a valid name.<br>";
        // Return back to the form using the header function
        header("Location: index.php");
        exit();
    }
    
    if (!preg_match($lastnamePattern, $lastname)) {
        // Lastname is not in the correct format
        echo "Error: Please enter a valid lastname.<br>";
        // Return back to the form using the header function
        header("Location: index.php");
        exit();
    }
    
    // If both name and lastname are in the correct format, do something with the data
    echo "Name and lastname are in the correct format!";
        
    ?>
    