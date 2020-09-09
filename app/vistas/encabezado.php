<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $datos["titulo"]; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="<?php print RUTA; ?>" class="navbar-brand">Tienda</a>

    <!--comprobamos si debe estar la barra de nav-->
    <?php if($datos["menu"]){
        #menu
    } ?>


</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

        <!-- mostramos un mensaje con el detalle de los errores de validacion -->
            <?php 
                if(isset($datos["errores"])){
                    if(count($datos["errores"])>0){
                        print "<div class='alert alert-danger mt-3'>";
                        foreach($datos['errores'] as $key=>$valor){
                            print "<strong>*".$valor."</strong> <br>";
                        }
                        print "</div>";
                    }
                }
            ?>