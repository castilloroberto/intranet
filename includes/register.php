<?php


if (isset($_POST['register-btn'])) {
    # code...
    require 'db.php';
    $dni   =   $_POST['dni'];
    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];
    $nombre = $_POST['nombre'];
    
    if (empty($dni) || empty($clave) || empty($nombre)) {
        # code...
        header("location: ../register.php?msg="."campos vacios"."&dni=".$dni."&nombre=".$nombre);

    } else {
        $hasedPass = password_hash($clave,PASSWORD_DEFAULT);
        $query = $db->prepare("INSERT INTO usuarios(DNI,NOMBRE,CLAVE) VALUES(?,?,?);");
        $query->bind_param("sss",$dni,$nombre,$hasedPass); 
        $query->execute();
        $query->close();

        header("location: ../register.php?msg="."usuario creado con exito");
        
    }
    
} else {
    
    header("location: ../index.php");
}