<?php
    // Establecer una cookie que expire en 1 hora
    setcookie('username', 'johndoe', time() + 3600);

    // Obtener el valor de una cookie
    $username = $_COOKIE['username'];

    // Verificar si una cookie existe
    if (isset($_COOKIE['username'])) {
    echo 'La cookie "username" existe';
    }

    // Eliminar una cookie
    setcookie('username', '', time() - 3600);
?>
<p></p>