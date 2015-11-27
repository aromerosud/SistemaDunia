<?php

  $id = 10;
   include '../model/paciente.php';
        $con = new Paciente();
        $resultado = $con->GetById($id);
        echo $resultado['id'];