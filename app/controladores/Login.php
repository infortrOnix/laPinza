<?php
//Controlador Login

class Login extends ControladorBase
{

    private $modelo;

    function __construct()
    {
        $this->modelo = $this->modelo("LoginModelo");
    }

    function caratula()
    {
        $datos = [
            "titulo" => "Login",
            "menu" => false
        ];
        $this->vista("loginVista", $datos);
    }

    function olvido()
    {
        print "Hola desde el olvido";
    }

    function registro()
    {
        //verificacion de metodo de envio

        if ($_SERVER['REQUEST_METHOD']=="POST"){

            $errores = array();

            $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
            $apellido = isset($_POST['apellido'])?$_POST['apellido']:"";
            $correo = isset($_POST['correo'])?$_POST['correo']:"";
            $clave1 = isset($_POST['clave1'])?$_POST['clave1']:"";
            $clave2 = isset($_POST['clave2'])?$_POST['clave2']:"";
            $domicilio = isset($_POST['domicilio'])?$_POST['domicilio']:"";
            $ciudad = isset($_POST['ciudad'])?$_POST['ciudad']:"";
            $provincia = isset($_POST['provincia'])?$_POST['provincia']:"";
            $pais = isset($_POST['pais'])?$_POST['pais']:"";
            
            //validacion
            if($nombre == ""){
                array_push($errores,"El Nombre es requerido");
            }if($apellido == ""){
                array_push($errores,"El Apellido es requerido");
            }if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                array_push($errores,"El Correo Valido es requerido");
            }if($clave1 != $clave2){
                array_push($errores,"Las claves deben ser iguales");
            }if($domicilio == ""){
                array_push($errores,"El Domicilio es requerido");
            }if($ciudad == ""){
                array_push($errores,"La Ciudad es requerida");
            }if($provincia == ""){
                array_push($errores,"La Provincia es requerida");
            }if($pais == ""){
                array_push($errores,"El Pais es requerido");
            
            }if(count($errores)==0){
                print "Dar de alta Datos";

                }else{
                    $datos = [
                        "titulo" => "Login",
                        "menu" => false,
                        "errores"=> $errores
                    ];
                    $this->vista("loginRegistroVista", $datos);
            }

        }else{

          $datos = [
            "titulo" => "Login",
            "menu" => false
        ];
        $this->vista("loginRegistroVista", $datos);
    }
}


    //Codigo de verificacion de envio de parametros por la Url
    /*  
    function metodoVariable(){
        if (func_num_args()>0){
            for($i=0; $i<func_num_args();$i++){
                print func_get_arg($i)."<br>";
            }
        }else{
            print "No existen argumntos";
        }
    }

    function metodoFijo($arg1="Uno", $arg2="Dos", $arg3 ="Tres"){
        print $arg1."<br>";
        print $arg2."<br>";
        print $arg3."<br>";
    }

    */
}
