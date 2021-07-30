<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <main class="container mt-4">
        <form class="col-3" action="includes/login.php" method="post">
            <h2>Inicie sesion</h2>
            
            <label for="dni" class="form-label">Numero de identidad</label>
            <input name="dni" type="text" class="form-control">
    
            <label for="clave" class="form-label">Clave</label>
            <input name="clave" type="password" class="form-control">
            
            <input name="login-btn" type="submit" class="btn btn-primary mt-4">
        </form>
        <?php 

            if (isset($_REQUEST['msg'])) {
                # code...
                echo $_REQUEST['msg'];
            }
        ?>
    </main>
</body>
</html>


    

