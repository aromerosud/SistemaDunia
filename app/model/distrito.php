<?php

include '../model/accesodb.php';
class Distrito{
   
 public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from distrito";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
    
}

?>
