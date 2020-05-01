<?php

include('BaseDatos.php');
$transaccionBaseDatos=new BaseDatos();


//Agregar Elementos
if(isset ($_POST["btnEnviar"])){
    
    $nombre= $_POST["nombreCategoria"];
    $codigo= $_POST["codigoCategoria"];
    $descripcion = $_POST["descripcionCategoria"];

    $query="INSERT INTO categorias(codigo, nombre, descripcion) VALUES ('$codigo','$nombre','$descripcion')";
    $transaccionBaseDatos->alterarBaseDatos($query);

}









?>