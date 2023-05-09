<?php
    // Connect to the database
    $connection = mysqli_connect('localhost', 'admin', 'administrator', 'phpmysql');

    // Check if the connection is correct
    if(mysqli_connect_errno()){
        echo 'The connection is wrong established' . mysqli_connect_error();
    }else{
        echo 'Connected successfully <br>';
    }

    //Query to configure characters codification
    mysqli_query($connection, "SET NAMES 'utf8'");
    $query = mysqli_query($connection, "SELECT * FROM notes");

    //Only one
    $notes = mysqli_fetch_assoc($query);
    var_dump($notes) . '<br>';
    
    //Iterate all the database
    while($note = mysqli_fetch_assoc($query)){
        var_dump($note);
        echo '<br>';
    }

    //Insert to databse from php
    $sql = "INSERT INTO notes VALUES(3, 'mount pc', 'mount pc', 'green')";
    $query = mysqli_query($connection, $sql);

    //check if query correctly executed although the error is said executing mysqli_query
    if($query){
        echo 'Connected successfully <br>';
    }else{
        echo 'Error: ' . mysqli_error($connection);
    }



?>