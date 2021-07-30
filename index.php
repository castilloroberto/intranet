<?php
     session_start();
    
     if (isset($_SESSION['user'])) {
         # code...
         header('location: home.php');
     } 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#4285f4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
</head>
<body>
    
    <main class="d-flex justify-content-center align-items-center flex-column" style="height:100vh">
        <form action="includes/login.php" method="post">
            <h2>Inicie sesion</h2>

            <?php 

                if (isset($_REQUEST['msg'])) {
                    # code...
                    $msg = $_REQUEST['msg'];
                    echo "<p style='color:red'>$msg</p>";
                }
            ?>
            
            <label for="dni" class="form-label">Numero de identidad</label>
            <input name="dni" type="text" maxlength="13" class="form-control">
    
            <label for="clave" class="form-label">Clave</label>
            <input name="clave" type="password" class="form-control">
            
            <input name="login-btn" type="submit" value="Entrar" class="btn btn-primary mt-4">
        </form>
    
    </main>
</body>
</html>


    

