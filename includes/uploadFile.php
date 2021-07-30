<?php


if (isset($_POST['btn-share-file'])) {
    
    $file = $_FILES['file'];
    
    $receptor = $_POST['receptor'];
    
    if ( empty($file) || empty($receptor) ) {
        
        header('location: ../shareFiles.php?error='."Archivo o Receptor vacio"."&receptor=".$receptor);
        
    } else {
        
        require 'db.php';
        session_start();
        $fileName = basename($file["name"]);
        $path = "../uploads/".$fileName;
        $tmpName = $file["tmp_name"];
        


        
        
        if ( move_uploaded_file($tmpName,$path) ) {
            # code...
            $dir = "uploads/".$fileName;

            $query = $db->prepare("INSERT INTO files (nombre,propietario,receptor,dir) VALUES (?,?,?,?);");
            $query->bind_param("ssss",$fileName,$_SESSION['id'],$receptor,$dir); 
            if($query->execute()){
                $insert =  "Exitoso"; 
            } else {
                $insert =  "Fallido"; 

            }
            $query->close();

                    
                        
            

            header("location: ../shareFiles.php?fileName=$fileName&receptop=".$receptor."&msg="."Archivo subido"."&insert=$insert");
        }
    
    }
}