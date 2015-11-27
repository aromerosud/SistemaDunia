<?php

include '../model/accesodb.php';

class Producto{
    public function ConsultarByDesc($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from producto where nom_pro like '$name%' or nom_pro like '$name%' ORDER BY idproducto desc";
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
   
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from producto where idproducto=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from producto";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
     public function ConsultarByAjax($contexto)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from producto where nom_pro LIKE '%$contexto%' or idproducto like '%$contexto%'" ;
        
        $rpta = $obj->ConsultarAjaxProductos($sql);
        return $rpta;
        
    }
    public function Nuevo($nom,$uni,$pre)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into producto(nom_pro, unidad_med, precio)"
                . "values('$nom','$uni','$pre')";
       
       $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id, $nom,$uni,$pre)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update analisis set "
                ."nom_pro='$nom',"
                ."unidad_med='$uni',"
                ."precio = '$pre',"
                ."where idproducto=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from producto where idproducto = $id";
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