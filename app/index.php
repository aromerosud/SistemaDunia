<?php
session_start();
//include './controller/login.controller.php';
 //include './model/reporte.php';
if(!$_SESSION)
{
    
   header("location: /ProyectoDunia");
    
    
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="recursos/css/bootstrap.min.css" rel="stylesheet">
        <link href="recursos/css/style.css" rel="stylesheet">
   
        <script src="recursos/js/jquery-1.11.2.min.js"></script>
        <script src="recursos/js/bootstrap.min.js"></script>
        <link href="recursos/css/morris.css" rel="stylesheet">
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
              <li class="active"><a href="index.php">Principal</a></li>
              <li><a href="views/reportesList.php">Reportes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="views/proveedorList.php">Proveedor</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Datos</li>
                <li><a href="views/usuarioList.php">Usuario</a></li>
                <li><a href="views/productosList.php">Producto</a></li>
                <li><a href="#">Comida</a></li>
                <li><a href="#">Configuracion</a></li>
              </ul>
            </li>
             <li><a href="#about">Usuario</a></li>
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

                   echo $_SESSION['login']." <a href='controller/logout.controller.php'>Logout</a>";
                 }

           ?>
           
           </h4>
        
        <h2>Principal</h2>
    </div>
    </body>
</html>
