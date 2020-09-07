<?php
    include_once("encabezado.php");
?>

<h2 class="text-center">Registro</h2>

<form action="login/registro" method="POST">

    <div class="form-group text-left">
        <label for="nombre">* Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Ingrese su nombre">
    </div>

    <div class="form-group text-left">
        <label for="apellido">* Apellido:</label>
        <input type="text" name="apellido" id="apellido" class="form-control"  placeholder="Ingrese su apellido">
    </div>

    <div class="form-group text-left">
        <label for="correo">* Correo:</label>
        <input type="email" name="correo" id="correo" class="form-control"  placeholder="Ingrese su E-mail">
    </div>

    <div class="form-group text-left">
        <label for="clave1">* Clave:</label>
        <input type="password" name="clave1" id="clave1" class="form-control" required placeholder="Ingrese su Contraseña">
    </div>

    <div class="form-group text-left">
        <label for="clave2">* Repetir Clave:</label>
        <input type="password" name="clave2" id="clave2" class="form-control" required  placeholder="Repita su Contraseña">
    </div>

    <div class="form-group text-left">
        <label for="domicilio">* Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" class="form-control"  placeholder="Ingrese su Domicilio">
    </div>

    <div class="form-group text-left">
        <label for="ciudad">* Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" class="form-control"  placeholder="Ingrese Cuidad">
    </div>

    <div class="form-group text-left">
        <label for="provincia">* Provincia:</label>
        <input type="text" name="provincia" id="provincia" class="form-control"  placeholder="Ingrese Provincia">
    </div>

    <div class="form-group text-left">
        <label for="pais">* Pais:</label>
        <input type="text" name="pais" id="pais" class="form-control"  placeholder="Ingrese Pais">
    </div>

    <div class="form-group text-left">
        
        <input type="submit" value="Enviar datos" class="btn btn-success" role="button" >
    </div>

</form>


<?php
    include_once("piepagina.php");
?>