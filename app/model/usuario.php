<?php

include '../model/accesodb.php';

class Usuario{
    //este se uso
    public function ConsultarByApellido($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from uusuario where nombres"
                . " like '$name%' or apellidos like"
                . " '$name%' "
                . "ORDER BY idusuario desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    public function ValidarUsuario($login,$clave)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from usuario where login='$login' and clave='$clave'";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    
    //se trae por el id
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from uusuario where idusuario=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from usuario";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
    public function ConsultarDistrito()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from distrito";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function ConsultaByDistritoId($id)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select distrito from usuario where id=$id";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }


    public function Nuevo($nom,$ape,$login,$clave,$telefono,$correo)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into uusuario(nombres, apellidos,login,clave,telefono,correo)"
                . "values('$nom','$ape','$login','$clave','$telefono','$correo')";
       
       $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id,$nom,$ape,$login,$clave,$telefono,$correo)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update uusuario set "
                ."nombres='$nom',"
                ."apellidos='$ape',"
                ."login='$login',"
                ."clave='$clave',"
                ."correo='$correo',"
                ."telefono='$telefono'"
                ."where idusuario=$id";
      $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from uusuario where idusuario = $id";
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