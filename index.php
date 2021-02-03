<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <!-- CABECERA -->
    <!------------------------------------------------------------------------------------------->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>

        <!-- MENÚ -->
        <!------------------------------------------------------------------------------------------->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoría 1</a>
                </li>
                <li>
                    <a href="index.php">Categoría 2</a>
                </li>
                <li>
                    <a href="index.php">Categoría 3</a>
                </li>
                <li>
                    <a href="index.php">Categoría 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <!-- BARRA LATERAL -->
    <!------------------------------------------------------------------------------------------->
    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identifícate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="text" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Regístrate</h3>
                <form action="registro.php" method="POST">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Email</label>
                    <input type="text" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>



        <!-- CAJA PRINCIPAL -->
        <!------------------------------------------------------------------------------------------->
        <div id="principal">
            
            <h1>Últimas entradas</h1>

            <article class="entrada">
                <a href="">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.
                    </p>
                </a>
            </article>

            <article class="entrada">
                <a href="">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.
                    </p>
                </a>
            </article>

            <article class="entrada">
                <a href="">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.
                    </p>
                </a>
            </article>

            <article class="entrada">
                <a href="">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.
                    </p>
                </a>
            </article>

            <div id="ver-todas">
                <a href="">Ver todas las entradas</a>
            </div>

        </div> <!-- Fin principal -->

        <div class="clearfix"></div>
    </div> <!-- Fin contenedor -->


    <!-- PIE DE PÁGINA -->
    <!------------------------------------------------------------------------------------------->
    <footer id="pie">
        <p>Desarrollado por Leonardo Cabral &copy; 2021</p>
    </footer>

</body>

</html>