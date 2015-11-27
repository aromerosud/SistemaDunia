<?php
   $buscar = $_GET['term'];
   include '../model/proveedor.php';
            $con = new Proveedor();
            $listar = $con->ConsultarByAjax($buscar);
  
    echo json_encode($listar);
