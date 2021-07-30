<?php 
    require 'header.php';
?>

<main class="container mt-4">
    <form class="col-3" action="includes/register.php" method="post">
            <h2>Registro</h2>
            
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control">
            
            <label for="dni" class="form-label">Numero de identidad</label>
            <input name="dni" maxlength="13" type="text" class="form-control">

            <label for="clave" class="form-label">Clave</label>
            <input name="clave" type="password" class="form-control">

            <label for="clave" class="form-label">Confirme Clave</label>
            <input name="clave2" type="password" class="form-control">
            
            <input name="register-btn" type="submit" class="btn btn-primary mt-4">
        </form>
        <?php 

            if (isset($_REQUEST['msg'])) {
                # code...
                echo $_REQUEST['msg'];
            }
        ?>
    </main>

<?php 
    require 'footer.php';
?>