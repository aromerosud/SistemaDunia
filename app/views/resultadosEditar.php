<?php
error_reporting(0);
session_start();

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Proyecto Isil</title>
  <script src="../recursos/js/jquery.js" type="text/javascript"></script>
  <link href="../recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../recursos/css/style.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="../recursos/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--  <script src="js/llenartable.js" type="text/javascript"></script>-->
  
  
</head>
<body onload="">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="/labproyecto">Laboratorio Clinico</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
              <li class="active"><a href="../index.php">Principal</a></li>
            <li><a href="reportesList.php">Reportes</a></li>
            <li><a href="atencionList.php">Atencion</a></li>
            <li><a href="resultadosList.php">Resultados</a></li>
            <li><a href="IngresoList.php">Ingreso</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenimiento<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pacienteList.php">Paciente</a></li>
                <li><a href="medicoList.php">Medico</a></li>
                <li><a href="empresaList.php">Empresa</a></li>
                <li><a href="analisisList.php">Analisis</a></li>
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
        </br>
  </br>
<h3>Modulo de analisis resultados</h3>

</br>

<div id="info">
    
</div>
<div id="resultado" class="table-responsive">
 
 <table id="resultTable" class="table table-striped info tableList">
                  <thead>
                     <th>Id</th>
                     <th>Descripcion</th>
                     <th>Resultado</th>
                     <th>Valor min</th>
                     <th>Valor max</th>
                     <th>Referencia</th>
                     <th>Fecha</th>
                     <th>Editar</th>
                 </thead>
                 <tbody>
  <?php
  
  
        $id = $_GET['id'];
        include '../model/resultados.php';
        $con = new Resultados();
        $listar = $con->GetByIdResultadoAnalisis($id);
        
     
       
        for($i=0; $i<count($listar); $i++) {
            
                  $idresultado =  $listar[$i]['id'];
                  $descripcion = $listar[$i]['descripcion'];
                  $resultado =  $listar[$i]['resultado'];
                  $valmin = $listar[$i]['valmin'];
                  $valmax = $listar[$i]['valmax'];
                  $referencia = $listar[$i]['referencia'];
                  $fechaingreso = $listar[$i]['fechaingreso'];
            
           echo "<tr id='$idresultado'>
                    <td>$idresultado</td>
                    <td>$descripcion</td>
                    <td> <input type='text' class='form-control' id='resultado_$idresultado' value='$resultado' ></td>
                    <td>{$listar[$i]['valmin']}</td>
                    <td>{$listar[$i]['valmax']}</td>
                    <td>{$listar[$i]['referencia']}</td>
                    <td>{$listar[$i]['fechaingreso']}</td>

                    <td>
                        <a href='#'  class='update'>Actualizar</a>
                    </td>
                    </tr>

                    ";
          
       } 

          
   ?>              
 </tbody>
</table>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $(".update").click(function(){
        
        var ID=$(this).parent().parent().attr('id');
        var resultado=$("#resultado_"+ID).val();
       
       var dataString = 'id='+ID+'&resultado='+resultado;
    
        $.ajax({
        type: "POST",
        url: "../controller/resultados.controller.php",
        data: dataString,
        }).done(function(data){
            $('#resultado_+ID').html(data);
             $('#info').html(data);
        });
      });
    });
</script>
   </div><!-- /.container -->
 </body>
</html>

