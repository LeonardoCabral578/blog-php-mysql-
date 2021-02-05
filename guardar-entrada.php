<?php
if(isset($_POST)) {
    // Conexión a la BD.
    require_once 'includes/conexion.php';

    // Datos
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false; 
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    // Array de errores
    $errores = array();

# VALIDAR DATOS
#-------------------------------------------------------------------------------------------#

    // Nombre
    if (empty($titulo)) {
        $errores['titulo'] = 'El título no es válido.';
    }

    // Descripción
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida.';
    }

    // Categoría
    if (empty($categoria && is_numeric($categoria))) {
        $errores['categoria'] = 'La categoria no es válida.';
    }

    // VALIDADO
    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        $guardar = mysqli_query($db, $sql);
    }else{
        $_SESSION['errores_entrada'] = $errores;
    }
}

// Redirección
header('Location: index.php');