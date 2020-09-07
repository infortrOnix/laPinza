<?php
//Controlador Login

class Login extends ControladorBase{

    private $modelo;

    function __construct()
    {
       $this->modelo= $this->modelo("LoginModelo");
    }

    function caratula(){
        $datos = [
                    "titulo"=>"Login",
                    "menu"=>false
                    ];
        $this->vista("loginVista",$datos);
    }

    function olvido(){
        print "Hola desde el olvido";
    }

    function registro(){
        $datos = [
            "titulo"=>"Login",
            "menu"=>false
            ];
$this->vista("loginRegistroVista",$datos);
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


?>