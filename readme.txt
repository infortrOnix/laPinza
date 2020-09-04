
.- La Carpeta Public/ tendra la informacion correspondiente a los archivos
    que contienen los archivos accesibles por el usuarios

.- La carpeta App/ contiene la estructura MVC donde tenemos
    Vistas/
    Controladores/
    Modelos/
    y Libs/ que contendra librerias o archivos auxiliares para el 
    correcto funcionamiento de la aplicacion
        ej:
            configuracion acceso a BD (Mysql.php)
            control del manejo de URL para el envio de objeto/metodo/parametro (Control.php)


.- Creamos los .htaccess
    Es para configurar Apache con los redireccionamientos
    Para evitar el acceso de los usuarios a las carpetas no permitidas
    Permitir el paso de parametros y/o metodos a traves de la URL