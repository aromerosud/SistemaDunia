<?php

include '../model/accesodb.php';

class Proveedor{
    public function ConsultarByDesc($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from proveedor where razsocial like '$name%' or ruc like '$name%'  ORDER BY codigoproveedor desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    public function GetByPrueba($des)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from proveedor where razsocial like '$des%' order by codigoproveedor desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from proveedor where idproveedor=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from proveedor";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
    
    
    public function ConsultarByAjax($contexto)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from proveedor where razsocial LIKE '%$contexto%'" ;
        
        $rpta = $obj->ConsultarAjaxProveedor($sql);
        return $rpta;
        
    }

    public function Nuevo($razon,$ruc,$dire,$telef,$web,$correo,$login,$clave,$fecha)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into proveedor(razonsocial,ruc,direccion,telefono,web,correo,login,clave,fecha)"
                . "values('$razon','$ruc','$dire','$telef','$web','$correo','$login','$clave','$fecha')";
       
       $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id,$razon,$ruc,$dire,$telef,$web,$correo,$login,$clave)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update empresa set "
                ."razonsocial='$razon',"
                ."ruc='$ruc',"
                ."direccion='$dire',"
                ."telefono='$telef',"
                ."web='$web',"
                ."correo='$correo',"
                ."login = '$login',"
                ."clave='$clave'"
                ."where idproveedor=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from proveedor where idproveedor = $id";
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
