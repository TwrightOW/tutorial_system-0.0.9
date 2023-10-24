<?php
// Llamamos a la conexión de la base de datos
include("conexion.php");

// Validamos que el formulario y que el botón login haya sido presionado
if (isset($_POST['login'])) {
    // Obtener los valores enviados por el formulario
    $usuario_per = $_POST['user_em'];
    $contraseña_per = $_POST['pass_em'];

    // Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
    $sql = "SELECT * FROM user_employee WHERE user_em = '$usuario_per' AND pass_em = '$contraseña_per'";
    $resultado = mysqli_query($conexion, $sql);
    $num_registros = mysqli_num_rows($resultado);

    if ($num_registros != 0) {
        // Inicio de sesión exitoso
        $row = mysqli_fetch_assoc($resultado);
        $rol_em = $row['rol_em'];
        $id_em = $row['id_em'];

        // Inicia la sesión
        session_start();
        
        // Almacenando username,id_em y rol_em en la sesion
        $_SESSION['username'] = $usuario_per;
        $_SESSION['id_em'] = $id_em;
        $_SESSION['rol_em']= $rol_em;
        // Redirige al usuario a la página correspondiente según el rol
        switch ($rol_em) {
            case 1:
                header("Location: http://localhost/tutorial_system/conten/user/pr/cot/index_cot.php?id_em=$id_em");
                break;
            case 2:
                header("Location: http://localhost/tutorial_system/conten/user/pr/coc/index_coc.php?id_em=$id_em");
                break;
            case 3:
                header("Location: http://localhost/tutorial_system/conten/user/pr/tut/index_tut.php?id_em=$id_em");
                break;
            case 5:
                header("Location: http://localhost/tutorial_system/conten/user/pr/sec/index_sec.php?id_em=$id_em");
                break;
            default:
                // Si ningun dato coincide, se redirige a la página de inicio de sesión
                header("Location: http://localhost/tutorial_system/conten/login_per.php");
        }
    } else {
        // Credenciales inválidas
        header("Location: http://localhost/tutorial_system/conten/login_per.php?alert=error");
    }
}
?>
