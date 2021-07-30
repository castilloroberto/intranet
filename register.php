<?php 
    require 'header.php';
?>

<main class="mt-2 d-flex  align-items-center flex-column" style="height:100vh"">
    <form  action="includes/register.php" method="post">
            <h2>Registro</h2>
            <?php 

                if (isset($_REQUEST['msg'])) {
                    # code...
                    echo '<p style="color:#0b5ed7">'.$_REQUEST['msg'].'</p>';
                }
            ?>
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control">
            
            <label for="dni" class="form-label">Numero de identidad</label>
            <input name="dni" maxlength="13" type="text" class="form-control">

            <label for="clave" class="form-label">Clave</label>
            <input name="clave" type="password" class="form-control">

            <label for="clave" class="form-label">Confirme Clave</label>
            <input name="clave2" type="password" class="form-control">
            
            <label for="clave" class="form-label">Rol de Usuario</label>

            <select name="register-rol" class="form-select">
                <option selected>Elija un rol</option>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select> 
            <!-- boton            -->
            <input name="register-btn" type="submit" class="btn btn-primary mt-4">
        </form>
        
    </main>
    
<?php 
require 'footer.php';
?>
