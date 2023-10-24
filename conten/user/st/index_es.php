<?php
session_start();

// Verifica si hay una sesión activa y si se ha proporcionado el parámetro "id_es" en la URL
if (isset($_SESSION['username']) && isset($_GET['id_es'])) {
    $username = $_SESSION['username'];
    $id_es = $_GET['id_es'];

    // Verifica si el ID en la URL coincide con el ID en la sesión
    if ($id_es != $_SESSION['id_es']) {
        // Si el ID no coincide, redirige al usuario a la página de inicio de sesión
        header('Location: http://localhost/tutorial_system/conten/login_es.php');
        exit();
    }
} else {
    // Si no hay una sesión activa o falta el parámetro "id_es" en la URL, redirige al usuario a la página de inicio de sesión
    header('Location: http://localhost/tutorial_system/conten/login_es.php');
    exit();
}
?>

<?php require_once "php/vistas_es/menuSP_es.php"?>

<!-- INICIO DE CONT PRINCIPAL -->
<div>
<h1>Bienvenido, <?php echo $username; ?></h1>
<form method="post" action="php/close.php">

<button type="submit">Cerrar sesión</button>
</form>
</div>
<!-- FIN DE CONT PRINCIPAL -->

<?php require_once "php/vistas_es/menuIN_es.php" ?>