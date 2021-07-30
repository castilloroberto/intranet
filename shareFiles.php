<?php 
    require 'header.php';
?>

<main class="mt-2 d-flex  align-items-center flex-column" style="height:100vh">
        <h2>Compartir Archivo</h2>

        <form class="mt-4" action="includes/uploadFile.php" enctype="multipart/form-data" method="post">
            
            <?php 

                if (isset($_REQUEST['msg'])) {
                    # code...
                    echo '<p style="color:#0b5ed7">'.$_REQUEST['msg'].'</p>';
                
                } elseif ( isset($_REQUEST['error']) ) {
                    
                    echo '<p style="color:red" >'.$_REQUEST['error'].'</p>';
                } 
            ?>


            <div class="mb-3">
                <label for="formFile" class="form-label">Archivo</label>
                <input name="file" class="form-control" type="file" id="formFile">
            </div>
            
            <label for="exampleDataList" class="form-label">Enviar a:</label>
            <input name="receptor" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Buscar...">
            

            <datalist id="datalistOptions">
                <?php 
               
                    require 'includes/db.php';
                    $query = $db->prepare("SELECT id,Nombre FROM usuarios;");
                    $query->execute();
                
                    $result = $query->get_result(); // get the mysqli result
                    
                    $users = $result->fetch_all(MYSQLI_ASSOC);
                    
                    foreach ($users as $user) {
                        $nombre = $user["Nombre"];
                        $id = $user["id"];
                        echo '<option value="'.$id.'">'.$nombre.'</option>';
                    }


                ?>
                

            </datalist>



            <input name="btn-share-file" type="submit" value="Enviar" class="mt-4 btn btn-outline-primary">
        </form>
        
    </main>


<?php 
    require 'footer.php';
?>