<?php

include '../model/accesodb.php';

class Login{
   
    public function ValidarUsuario($login,$clave)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from uusuario where login='$login' and clave='$clave'";
        
        $rpta = $obj->ConsultarByLogin($sql);
        return $rpta;
    }
    
    
}