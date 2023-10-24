<?php

session_start();

// Verifica si el usuario ya ha iniciado sesión
if (isset($_SESSION['username'])) {
    // El usuario ya ha iniciado sesión, redirige según su rol
    $rol_em = $_SESSION['rol_em']; 

    switch ($rol_em) {
        case 1:
            header("Location: http://localhost/tutorial_system/conten/user/pr/cot/index_cot.php?id_em=".$_SESSION['id_em']);
            break;
        case 2:
            header("Location: http://localhost/tutorial_system/conten/user/pr/coc/index_coc.php?id_em=".$_SESSION['id_em']);
            break;
        case 3:
            header("Location: http://localhost/tutorial_system/conten/user/pr/tut/index_tut.php?id_em=".$_SESSION['id_em']);
            break;
        case 5:
            header("Location: http://localhost/tutorial_system/conten/user/pr/sec/index_sec.php?id_em=".$_SESSION['id_em']);
            break;
        default:
        if (isset($_SESSION['id_es'])) {

            header("Location: http://localhost/tutorial_system/conten/user/st/index_es.php?id_es=" . $_SESSION['id_es']);
            exit; 
        }
    }
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

    <title>TAJI-Login Estudiante</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <script src="user/st/js/login_validacion.js"></script>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Fila anidada dentro del cuerpo de la tarjeta -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="../img/V4Logo_system.png" class="rounded mx-auto d-block " alt="..." width="450" height="500px"> 
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                       
                                        <h1 class="h4 text-gray-900 mb-4">Inicio de sesión</h1>
                                      <img src="../img/LogoEscuela_system.png" class="rounded mx-auto d-block" alt="..." width="150px" height="100px" >
                                        

                                    </div>
                                        <!-- Seleccion de tipo de usuario -->
                                        <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                                            <div class="container-fluid">
                                              
                                          <!--Boton del menu-->
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                          </button>
                                          <!--Elementos de menu colapsable-->
                                          <div class="colapse navbar-collapse"  id="menu">
                                            <ul  class="navbar-nav mx-auto">
                                            <li class="nav-item">
                                                  <a class="nav-link active" href="login_es.php">Estudiante</a>
                                              </li>
                                              <li class="nav-item">                                           
                                                  <a class="nav-link" href="login_per.php">Personal</a>
                                              </li>
        
                                              </div>
                                              
                                            </div>
                                          </nav><!-- Termino de tipo de usuario -->
                                    <hr>
                                     <!-- ingreso de datos del usuario -->
                                    <form class="user" id="login_es_form" action="php/login_es.php" method="POST" >
                                        <div class="form-group">
                                            <input type="user" class="form-control form-control-user"
                                                id="user_es" name="user_es" aria-describedby="emailHelp"
                                                placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="pass_es" name="pass_es" placeholder="Contraseña" required>
                                        </div>   
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Iniciar sesión</button>
                                    </form>
                                          <!-- Fin de procesos de ingreso de datos del usuario -->
                                          <p id="mensaje"></p> <!-- Mensaje oculto -->
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>