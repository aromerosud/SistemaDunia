<?php

include '../model/accesodb.php';

class Tipo{
    public function ConsultarByDesc($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from tipo where codigo like '$name%' or descripcion like '$name%' ORDER BY codigo desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
   public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from tipo where id=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from tipo";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
    public function Nuevo($cod,$desc)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "insert into tipo(codigo,descripcion)" 
                ."values('$cod','$desc')";
                
        $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id,$cod,$descr)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update tipo set "
                ."codigo='$cod',"
                ."descripcion='$descr'"
                ."where id=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from tipo where id = $id";
        $result = $obj->Eliminar($sql);
        if(!$result)
        {
            return FALSE;
        }
        else {
            
            return TRUE;
        }
        
    }
}
