<!-- Llamamos al encabezado-->
<?php include_once("encabezado.php");
?>


            <h1 class="text-center">Login</h1>
            <div class="card p-4">
  <form action="login/verifica/" method="POST">
       
        <div class="form-group text-left">
            <label for="usuario">Usuario:</label> 
            <input type="text" name="usuario" class="form-control">
        </div>

        <div class="form-group text-left">
            <label for="clave">Clave de acceso:</label> 
            <input type="password" name="clave" class="form-control">
        </div>
        
        <div class="form-group text-left">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>

        <div class="form-group">
            <input type="checkbox" name="recordar">
            <label for="recordar">Recordarme</label>
        </div>

    </form>
            </div><!--caja decorado-->

    <a href="login/registro/" >Registrarse /</a>
    <a href="login/olvido/" >Olvidaste tu clave?</a>

    <!-- Llamamos al Pie de pagina-->

    <?php 

        include_once("piepagina.php");
    ?>