<?php

if (isset($_POST)) {

# CONEXIÓN Y SESIÓN
#-------------------------------------------------------------------------------------------#
    require_once 'includes/conexion.php';

    if(!isset($_SESSION)) {
    session_start();
    }

# VALORES DEL FORMULARIO DE REGISTRO
#-------------------------------------------------------------------------------------------#
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    // Array de errores
    $errores = array();

# VALIDAR DATOS
#-------------------------------------------------------------------------------------------#

    # NOMBRE
    #---------------------------------------------------#
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    # APELLIDOS
    #---------------------------------------------------#
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "El apellido no es válido";
    }

    # EMAIL
    #---------------------------------------------------#
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }

    # PASSWORD
    #---------------------------------------------------#
    if (!empty($email)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contraseña está vacía";
    }


# REGISTRAR USUARIO
#-------------------------------------------------------------------------------------------#
    $guardar_usuario = false;

    if (count($errores) == 0) {
        $guardar_usuario = true;

        # CIFRAR LA CONTRASEÑA
        #---------------------------------------------------#
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        # INSERTAR USUARIO
        #---------------------------------------------------#
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con éxito.";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!";
        }

    } else {
        $_SESSION['errores'] = $errores;
    }

}

// Redirección
header('Location: index.php');
