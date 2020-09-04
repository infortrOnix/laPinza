<?php


/*Control maneja la URL y lanza los procesos
 el primer elemento es el objeto o controlador
 el segundo elemento es el metodo o accion
 el tercer elemento y posteriores son solo parametros*/



class Control{


    function __construct()
    {
        $url = $this->separaUrl();
        var_dump($url);     //muestra informacion sobre la variable tipo y tamaño
    }

    # Este metodo toma la URL y la separa para utilizarla luego
    function separaUrl(){
        $url = "";
        if(isset($_GET["url"])){    //tomamos el valor con GET que es enviado por la URL desde el  .htaccess
            //eliminamos el caracter final
            $url = rtrim($_GET["url"],"/");
            $url = rtrim($_GET["url"],"\\");
            //limpiamos los caractreres no propios para la url

            $url = filter_var($url, FILTER_SANITIZE_URL);
            //SEPARAMOS

            $url = explode("/",$url);

        }

        return $url;
    }

    

}

?>