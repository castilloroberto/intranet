<?php

if (isset($_POST['login-btn'])) {
    # code...
    require 'db.php';
    $dni   =   $_POST['dni'];
    $clave = $_POST['clave'];

    if (empty($dni) || empty($clave)) {
        # code...
        header("location: ../index.php?msg="."Campos vacios");

    } else {
        
        $query = $db->prepare("SELECT * FROM usuarios WHERE DNI = ?;");

        $query->bind_param("s",$dni); 
        $query->execute();
    
        $result = $query->get_result(); // get the mysqli result
        $user = $result->fetch_assoc(); // fetch data 
        
        if ($user) {
            # code...
            
            $checkPwd = password_verify($clave,$user["Clave"]);
            
            if ($checkPwd) {

                session_start();
                $_SESSION['user'] = $user["DNI"];
                $_SESSION['username'] = $user["Nombre"];

                header('location: ../home.php');
                exit();

            } else {
                
                $msg = "Clave incorrecta";

            }
            
        } else {

            $msg = "Numero de identidad incorrecta";
        }
        $query->close();
        
        header("location: ../index.php?msg=".$msg);
        exit();    
        
        
        
    }
    
    
    
} else{
    header("location: ../index.php");
    exit();    

}

