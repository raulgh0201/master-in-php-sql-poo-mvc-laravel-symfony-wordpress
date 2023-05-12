<?php

    function showError($errors, $field){
        $alert = '';

        if(isset($errors[$field]) && !empty($field)) $alert = $errors[$field];

        return $alert;
    }

    function deleteErrors(){
        $deleted = session_unset($_SESSION['errors']);
        return $deleted;
    }

?>