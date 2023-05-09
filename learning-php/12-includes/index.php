<?php

    include('includes/header.php');
    include('includes/footer.php');

    // Example using require
    require "includes/header.php";

    // Require stops the script execution if the file is not found or has syntax errors.

    echo "This is the main content of the page.";


    // Example using include
    include "includes/header.php";

    // If the file is not found or has syntax errors, include will give a warning, but it will continue executing the script.

    echo "This is the main content of the page.";

    include "includes/footer.php";

?>
