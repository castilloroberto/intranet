<?php 
    session_start();
    
    if (!isset($_SESSION['user'])) {
        # code...
        header('location: index.php');
    } 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intranet</title>
    <meta name="theme-color" content="#4285f4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand">
                <img src="img/sumueblelogo.jpeg" alt=""  width="50" height="50">
            </span>
            <h3 class="mx-4">Su Mueble</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="files.php">Mis Archivos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shareFiles.php">Compartir Archivo</a>
                    </li>
                
                    <?php if($_SESSION['rol'] == 'admin') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php" tabindex="-1" >Registro</a>
                        </li>
                    <?php endif; ?>
                    
                </ul>
                <form action="includes/logout.php" method="post">
                    <button type="submit" class="btn btn-outline-dark">Cerrar Sesion</button>
                </form>
            
            </div>
           

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


