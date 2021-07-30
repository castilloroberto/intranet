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

        $query = $db->prepare("SELECT * FROM usuarios WHERE DNI = ? AND CLAVE = ?;");
        $query->bind_param("ss",$dni,$clave); 
        $query->execute();
    
        $result = $query->get_result(); // get the mysqli result
        $user = $result->fetch_assoc(); // fetch data 
        if ($user) {
            # code...
            header('location: ../home.php');
            
        } else {
            $msg = "Credenciales incorrectas";
            header("location: ../index.php?msg=".$msg);
        }
        $query->close();

    }


    
} else{
    header("location: ../index.php");
    
}

