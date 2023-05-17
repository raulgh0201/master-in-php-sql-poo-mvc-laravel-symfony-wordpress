<?php 
session_start();
require_once('helpers.php'); ?>
<aside id="sidebar">
    <div id="login" class='block-aside'>
        <h3>Identifícate</h3><hr><br>
        <form action="login.php" method='POST'>
            <label for="email">Email</label>
            <input type="text" name='email'>

            <label for="password">Contraseña</label>
            <input type="text" name='password'>

            <input type="submit" value="Entrar">
        </form>
    </div><br>
    <div id="register" class='block-aside'>
        <h3>Regístrate</h3><hr><br>
        <form action="register.php" method='POST'>
            <label for="name">Nombre</label >
            <input type="text" name='name' required>
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'name') : ''; ?>

            <label for="lastname">Apellidos</label>
            <input type="text" name='lastname' required>
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'lastName') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name='email' required>
            <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'email') : ''; ?>

            <label for="password">Contraseña</label>
            <input type="password" name='password' required>
            
            <?php 
                echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'password') : '';
                deleteErrors();
                ?>
            
            

            <input type="submit" value="Registrar">
        </form>
    </div>
</aside> 