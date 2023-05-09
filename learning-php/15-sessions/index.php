<?php
// Start session
session_start();

// Set session variables
$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john_doe@example.com';

// Check if session variables exist
if(isset($_SESSION['username']) && isset($_SESSION['email'])){
    echo "Session variables are set.";
}else{
    echo "Session variables are not set.";
}

// Unset session variables
unset($_SESSION['username']);
unset($_SESSION['email']);

// Destroy session
session_destroy();
?>
