<?php

class BaseDatos{

    //ATRIBUTOS
    private $servidor="localhost";
    private $usuario="root";
    private $password="";
    private $nombreBaseDatos="alquilando";

    private $conexion;
    
    //CONSTRUCTOR
    function __construct(){}


    //METODOS
    
    //Función para conectarnos con la base de datos
    public function conectarConBaseDatos(){
        
        //se establece la conexión
        $this->conexion= mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->nombreBaseDatos
        );
        //validar el estado de la conexion
        if(!($this->conexion)){
            die('<br> Error de Conexión ('.mysqli_connect_errno().')'.mysqli_connect_error());
        }else{
            echo "<br> Conexión exitosa a la base de datos ".$this->nombreBaseDatos;
        }  
    }

    //Función para alterar la BD (AGREGAR(POST), ACTUALIZAR(UPDATE/PUT), BORRAR(DELETE))
    public function alterarBaseDatos($sentenciaSQL){
        $this->conectarConBaseDatos();
        $enlace=$this->conexion;
        $enlace->query($sentenciaSQL);
        $enlace->close();
    }

}

    
    
    
?>