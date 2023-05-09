<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Fortnite</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div id="logo">
            <a href="index.php">Blog de Fortnite</a>
        </div>

        <nav id="nav">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Categoria1</a></li>
                <li><a href="">Categoria2</a></li>
                <li><a href="">Categoria3</a></li>
                <li><a href="">Categoria4</a></li>
                <li><a href="">Categoria5</a></li>
                <li><a href="">Sobre mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <div id="container">
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
                    <label for="nombre">Nombre</label>
                    <input type="text" name='name'>

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name='apellidos'>

                    <label for="email">Email</label>
                    <input type="email" name='email'>

                    <label for="password">Contraseña</label>
                    <input type="password" name='password'>

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside> 

        <div id="main">
            <h1>Últimas entradas</h1>

            <article class='entry'>
                <a href="">
                    <h2>Como construir mas rápido en fortnite</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repudiandae nisi obcaecati. Architecto aliquam facilis animi maiores veniam aspernatur ea distinctio officiis consectetur dolorum delectus sequi ad nostrum, sed facere!</p>
                    
                </a>
            </article>
            <article class='entry'>
            <a href="">
                    <h2>Como construir mas rápido en fortnite</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repudiandae nisi obcaecati. Architecto aliquam facilis animi maiores veniam aspernatur ea distinctio officiis consectetur dolorum delectus sequi ad nostrum, sed facere!</p>
                </a>
            </article>
            <article class='entry'>
            <a href="">
                    <h2>Como construir mas rápido en fortnite</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repudiandae nisi obcaecati. Architecto aliquam facilis animi maiores veniam aspernatur ea distinctio officiis consectetur dolorum delectus sequi ad nostrum, sed facere!</p>
                </a>
            </article>
            <div id="ver-todas"><a href="">Ver todas las entradas</a></div>
        </div>
        <div class="clearfix"></div>
        
    </div>

    <footer id='footer'>
        <p>Desarrollado por Raul Garcia &copy; 2023</p>
    </footer>




</body>
</html>