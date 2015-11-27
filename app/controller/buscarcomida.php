<?php

   $buscar = $_GET['term'];
   include '../model/analisis.php';
            $con = new Comida();
            $listar = $con->ConsultarByAjax($buscar);

            
    echo json_encode($listar);
