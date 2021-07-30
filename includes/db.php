<?php

$db = new mysqli(
    'localhost',
    'root',
    '',
    'SuMuebleDB'
);
if ($db->connect_error) {
    
    die("conexion fallida:".$db->connect_error);
}
