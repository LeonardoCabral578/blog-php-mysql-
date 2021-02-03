<aside id="sidebar">

    <div id="login" class="bloque">
        <h3>Identifícate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email">
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <br>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque">
        <h3>Regístrate</h3>
        <form action="registro.php" method="POST">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <br>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <br>

            <label for="email">Email</label>
            <input type="text" name="email">
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <br>

            <input type="submit" value="Registrar">
        </form>
    </div>
</aside>