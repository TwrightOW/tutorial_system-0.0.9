<?php

include("conexion.php");

// Validamos que el formulario y que el botón login haya sido presionado
if (isset($_POST['login'])) {
    // Obtener los valores enviados por el formulario
    $usuario_es = $_POST['user_es'];
    $contraseña_es = $_POST['pass_es'];

    // Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
    $sql = "SELECT id_es FROM user_student WHERE user_es= '$usuario_es' and pass_es= '$contraseña_es'";
    $resultado = mysqli_query($conexion, $sql);
    $num_registros = mysqli_num_rows($resultado);

    if ($num_registros != 0) {
        // Obtenemos el valor de id_es
        $fila = mysqli_fetch_assoc($resultado);
        $id_es = $fila['id_es'];

        // Se inicia la sesion
        session_start();

        // Se guarda el username y el id en la sesion
        $_SESSION['username'] = $usuario_es;
        $_SESSION['id_es'] = $id_es;

        // Se manda al usuario a la pagina principal del estudiante junto al id como url
        header("Location: http://localhost/tutorial_system/conten/user/st/index_es.php?id_es=$id_es");
    } else {
        // Los datos son incorrectos, redirigimos de vuelta a la página de inicio de sesión con una alerta
        header('Location: http://localhost/tutorial_system/conten/login_es.php?alert=error');
    }
}
?>
