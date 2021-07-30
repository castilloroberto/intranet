<?php


if (isset($_POST['register-btn'])) {
    # code...
    require 'db.php';
    $dni   =   $_POST['dni'];
    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];
    $nombre = $_POST['nombre'];
    $rol = $_POST['register-rol'];
    
    if (empty($dni) || empty($clave) || empty($nombre) || empty($rol)) {
        # code...
        header("location: ../register.php?msg="."campos vacios"."&dni=".$dni."&nombre=".$nombre);

    } else {
        
        // encriptar la contraseña
        $hasedPass = password_hash($clave,PASSWORD_DEFAULT);

        $query = $db->prepare("INSERT INTO usuarios(DNI,NOMBRE,CLAVE,Rol) VALUES(?,?,?,?);");
        $query->bind_param("ssss",$dni,$nombre,$hasedPass,$rol);
        if ($query->execute()) {
            # code...
            $insert = "Exitoso"; 
        } else {
            
            $insert = "Exitoso"; 
        } 
        
        $query->close();

        header("location: ../register.php?msg="."usuario creado con exito"."&insert=$insert");
        
    }
    
} else {
    
    header("location: ../index.php");
}