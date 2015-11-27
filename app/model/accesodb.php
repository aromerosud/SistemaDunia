<?php 
error_reporting(0);
class Accesodb{
    private $cn;
    
    public function Conectar(){
        
        $this->cn=  mysql_connect("localhost", "dunia", "123");
        mysql_select_db("sistdunia");
    }
    public function Consultar($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_array($rs)){
            $arreglo[]=$registro;
        }
        return $arreglo;
    }
     public function ConsultarAjax($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_array($rs,MYSQLI_ASSOC)){
            $arreglo[]= array("value"=>$registro['nombres'].' '.$registro['apellidos'],
                "id"=> $registro['id']);
        }
        return $arreglo;
    }
     
     public function ConsultarAjaxProveedor($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_array($rs,MYSQLI_ASSOC)){
            $arreglo[]= array("value"=>$registro['razsocial'],
                "id"=> $registro['id']);
        }
        return $arreglo;
    }
     public function ConsultarAjaxProductos($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_array($rs,MYSQLI_ASSOC)){
            $arreglo[]= array("value"=>$registro['nom_pro'],
                "idproducto"=> $registro['idproducto']);
        }
        return $arreglo;
    }
    
    public function ConsultarAjaxComida($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_array($rs,MYSQLI_ASSOC)){
            $arreglo[]= array("value"=>$registro['nom_com'],
                "id"=> $registro['id']);
        }
        return $arreglo;
    }
    
    public function ConsultarById($query)
    {
        if(!$sql=  mysql_query($query))
        {
            throw new Exception("Error en la consulta");
        }
        else {
            $num = mysql_num_rows($sql);
            while ($num>0)
            {
                $data = mysql_fetch_array($sql);
                $num--;
            }
        }
        return $data;
    }
    public function ConsultarByIdAtencion($query)
    {
//        if(!$sql=  mysql_query($query))
//        {
//            throw new Exception("Error en la consulta");
//        }
//        else {
//            $num = mysql_num_rows($sql);
//            while ($num>0)
//            {
//                $data = mysql_fetch_array($sql);
//                $num--;
//            }
//        }
//        return $data;
        
        
        
    }


    public function Insertar($sql)
    {
        mysql_query($sql,  $this->cn);
        $id = mysql_insert_id();
        return $id;
        
    }
    public function InsertarIngreso($sql)
    {
        mysql_query($sql, $this->cn);
        $id = mysql_insert_id();
        return $id;
    }
    public function Actualizar($sql)
    {
      $resu = mysql_query($sql,$this->cn);
      if(!$resu)
       {
            throw new Exception("Error en la actualizacion");
       }
        else {
            return TRUE;
      }

        
    }
    public function Eliminar($sql)
    {
       $result = mysql_query($sql,  $this->cn);
       
        if(!$result)
        {
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    public function ConsultarByLogin($query)
    {
        if(!$sql=  mysql_query($query))
        {
            throw new Exception("Error en la consulta");
        }
        else {
            $num = mysql_num_rows($sql);
            while ($num>0)
            {
                $data = mysql_fetch_array($sql);
                $num--;
            }
        }
        return $data;
    }
    
}