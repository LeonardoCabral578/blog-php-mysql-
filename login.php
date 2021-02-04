<?php

# SESIÓN Y CONEXIÓN
#-------------------------------------------------------------------------------------------#
require_once 'includes/conexion.php';

# RECOGER DATOS DEL FORMULARIO
#-------------------------------------------------------------------------------------------#
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

# COMPROBACIÓN DE CREDENCIALES DEL USUARIO
#-------------------------------------------------------------------------------------------#
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

# COMPROBAR CONTRASEÑA / CIFRAR
#-------------------------------------------------------------------------------------------#
    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($password, $usuario['password']);

# UTILIZAR LA SESIÓN PARA GUARDAR LOS DATOS DEL USUARIO LOGUEADO
#-------------------------------------------------------------------------------------------#    
        if($verify) {
            $_SESSION['usuario'] = $usuario;

            if(isset($_SESSION['error_login'])) {
                session_unset();
            }

        }else{
            // Mensaje de error
            $_SESSION['error-login'] = "Login incorrecto!!";

        }
    }else{
        // Mensaje de error
        $_SESSION['error-login'] = "Login incorrecto!!";
    }
}

# REDIRIGIR AL index.php
#-------------------------------------------------------------------------------------------#
header('Location: index.php');
