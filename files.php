<?php 
    require 'header.php';
?>

    <main class="mt-4 d-flex  align-items-center flex-column" style="height:100vh">
        <h2>Mis Archivos</h2>


        <?php 
               
            require 'includes/db.php';
            $userID = $_SESSION['id'];
            $query = $db->prepare("SELECT * FROM filesView where idreceptor = ? or idpropietario = ?;");
            $query->bind_param("ss",$userID,$userID); 
            $query->execute();
        
            $result = $query->get_result(); // get the mysqli result
            
            $sharedFiles = $result->fetch_all(MYSQLI_ASSOC);
            
            foreach ($sharedFiles as $sharedFile) { ?>

                <div class="card w-75 my-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $sharedFile["nombre"]  ?></h5>
                        <p class="card-text">
                            Propietario: <?php echo $sharedFile["propietario"]  ?>
                        </p>
                        <a download="<?php echo $sharedFile["nombre"]  ?>" href="<?php echo $sharedFile["dir"] ?>" class="btn btn-primary">Descargar</a>
                    </div>
                
                </div>



            <?php } ?>


        



    </main>

<?php 
    require 'footer.php';
?>