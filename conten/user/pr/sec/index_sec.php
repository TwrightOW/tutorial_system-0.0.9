<?php
session_start();

// Verifica si hay una sesión activa y si se proporciona el parámetro "id_em" en la URL
if (isset($_SESSION['username']) && isset($_GET['id_em'])) {
    $username = $_SESSION['username'];
    $id_em = $_GET['id_em'];

    // Verifica si el "id_em" en la URL coincide con el "id_em" en la sesión
    if ($id_em != $_SESSION['id_em']) {
        // Si el "id_em" no coincide, nos mandara a la pagina de login
        header('Location: http://localhost/tutorial_system/conten/login_per.php');
        exit();
    }

    // Verifica el rol del usuario es el  la secre
    if ($_SESSION['rol_em'] !== '5') {
        // Si el rol no es "1", nos mandara a la pagina de login
        header('Location: http://localhost/tutorial_system/conten/login_per.php');
        exit();
    }
} else {
    // Si no hay una sesión activa o falta el parámetro "id_em" en la URL, nos mandara a la pagina de login
    header('Location: http://localhost/tutorial_system/conten/login_per.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAJI-User_secreC</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <h1>Secretaria</h1>
    <h1>Bienvenido, <?php echo $username; ?></h1>
    <form method="post" action="close.php">

<button type="submit">Cerrar sesión</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>