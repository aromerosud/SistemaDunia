<?php
error_reporting(0);
session_start();
include '../controller/login.controller.php';
if(!$_SESSION)
{
    
   header("location: /labproyecto");
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <link href="../recursos/css/bootstrap.min.css" rel="stylesheet">
        <link href="../recursos/css/style.css" rel="stylesheet">
       
        <link href="../recursos/css/bootstrap-datetimepicker.min.css">
        <link href="../recursos/css/bootstrap-datetimepicker.css">
      
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
        
        
<!-- <script src="../recursos/js/jquery-1.11.2.min.js"></script>-->
<!--        <script src="../recursos/js/bootstrap-datetimepicker.min.js"></script>
        <script src="../recursos/js/jquery.numeric.js"></script>-->
  
   

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Sistema Dunia</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
              <li class="active"><a href="../index.php">Principal</a></li>
            <li><a href="reportesList.php">Reportes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="proveedorList.php">Proveedor</a></li>
                <li><a href="productosList.php">Producto</a></li>
                <li><a href="analisisList.php">Comida</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Datos</li>
                <li><a href="usuarioList.php">Usuario</a></li>
                <li><a href="tipoList.php">Tipo usuario</a></li>
                <li><a href="#">Configuracion</a></li>
              </ul>
              
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Seguridad<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="usuarioList.php">Usuario</a></li>
                 <li><a href="#">Configuracion</a></li>
              </ul>
              
            </li>
         </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </br>
    <div class="container contents">
         <h4 style="float: right">Welcome 
           <?php
                 if(isset($_SESSION['login']))
                 {

                   echo $_SESSION['login']." <a href='../controller/logout.controller.php'>Logout</a>";
                 }

           ?>
           
           </h4>