<?php

class Mysql{

    private $host ="localhost";
    private $usuario ="root";
    private $clave ="";
    private $db ="lapinza";

    private $conn;

        function __construct()
        {
            $this->conn = mysqli_connect($this->host,
                                         $this->usuario,
                                         $this->clave,
                                         $this->db );
                            
            if(mysqli_connect_errno()){
                printf("Error al conectar a la BD..", mysqli_connect_errno());
                exit();
                }
                else{
                      print ("Conexion Exitosa ! <br>");
                
                  
                }
        }
                
            
    


}

?>