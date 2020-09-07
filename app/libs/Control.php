<?php


/*Control maneja la URL y lanza los procesos
 el primer elemento es el objeto o controlador
 el segundo elemento es el metodo o accion
 el tercer elemento y posteriores son solo parametros*/



class Control{

    protected $controlador = "Login"; //clase
    protected $metodo = "Caratula"; //metodo
    protected $parametro = []; // parametro

    function __construct()
    {
        $url = $this->separaUrl();
        
        //verificamos si existe el archivo fisico para la clase con file_exists
        // con ucwords cambia la primer letra a mayuscula
        //unset elimina el metodo

        if($url!="" && file_exists("../app/controladores/".ucwords($url[0]).".php")){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
          //  var_dump($url);     //muestra informacion sobre la variable tipo y tamaño

        }
        //cargando la clase del controlador
        require_once("../app/controladores/".ucwords($this->controlador).".php");
        //Instanciando la clase controlador
        $this->controlador = new $this->controlador;

        //buscamos si exsite el metodo llamado en la url
        if(isset($url[1])){
            if(method_exists($this->controlador,$url[1])){
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }
        //
        $this->parametro = $url ? array_values($url):[];

        call_user_func_array([$this->controlador,$this->metodo],$this->parametro);
        //print "<br>"."Metodo: ".$this->metodo."<br>";
       // var_dump($this->parametro);

    }

    # Este metodo toma la URL y la separa para utilizarla luego
    function separaUrl(){
        $url = "";
        if(isset($_GET["url"])){    //tomamos el valor con GET que es enviado por la URL desde el  .htaccess
            //eliminamos el caracter final
            $url = rtrim($_GET["url"],"/");
            $url = rtrim($_GET["url"],"\\"); //algunos navegadores puden usar esta barra
            //limpiamos los caractreres no propios para la url

            $url = filter_var($url, FILTER_SANITIZE_URL); //limpia los caracteres no validos para url(+ : etc..)
            //SEPARAMOS

            $url = explode("/",$url); //separa la cadena por medio de un delimitador ("/") y lo regresa en un array


        }

        return $url;
    }

    

}

?>