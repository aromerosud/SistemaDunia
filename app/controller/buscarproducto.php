<?php

   $buscar = $_GET['term'];
   include '../model/analisis.php';
            $con = new Producto();
            $listar = $con->ConsultarByAjax($buscar);

            
    echo json_encode($listar);
