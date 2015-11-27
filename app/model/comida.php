<?php

include '../model/accesodb.php';

class Comida{
    public function ConsultarByDesc($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from comida where nom_com like '$name%' or nom_com like '$name%' ORDER BY idcomida desc";
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
   
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from comida where idcomida=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from comida";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
     public function ConsultarByAjax($contexto)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from comida where nom_com LIKE '%$contexto%' or idcomida like '%$contexto%'" ;
        
        $rpta = $obj->ConsultarAjaxComida($sql);
        return $rpta;
        
    }
    public function Nuevo($nom,$tip,$prod)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into comida(nom_com, tipo_com, producto_idproducto)"
                . "values('$nom','$tip','$prod')";
       
       $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id,$nom,$tip,$prod)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update analisis set "
                ."nom_com='$nom',"
                ."tipo_com='$tip',"
                ."producto_idproducto='$prod',"
                ."where idcomida=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from comida where idcomida = $id";
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