<?php

include '../model/accesodb.php';

class Documento{
    public function ConsultarByDesc($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento where   ORDER BY codigo desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    public function GetByPrueba($des)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento where resultado like '$des%' order by codigo desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento where id=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    
    public function GetByIdIngresoByIdAnalisis($iding,$idana)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento where idingreso=$iding and idanalisis=$idana";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
    public function GetByIdAtencion($idatencion)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "SELECT * FROM documento WHERE idIngreso ='$idatencion'";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
  
    public function ConsultarByAjax($contexto)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from documento where razonsocial LIKE '%$contexto%'" ;
        
        $rpta = $obj->ConsultarAjaxEmpresa($sql);
        return $rpta;
        
    }

    public function Nuevo($idingreso,$tipodocumento,$monto,$formapago)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into documento(idingreso,tipo,monto,formapago)"
                . "values('$idingreso','$tipodocumento','$monto','$formapago')";
       
       $id = $obj->Insertar($sql); 
       return $id;
        
    }
    public function Update($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update documento set "
                ."fechaactualizacion= now(),"
                ."estado='1'"
                ."where id=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from resultado where id = $id";
        $result = $obj->Eliminar($sql);
        if(!$result)
        {
            return FALSE;
        }
        else {
            
            return TRUE;
        }
        
    }
    
     public function GetByMonto($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select sum(monto) as total
                from documento where idingreso= $id";

        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
      public function GetByMontoTotal($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "SELECT sum(analisis.precio)- 
               (SELECT SUM( documento.monto ) FROM documento WHERE idingreso ='$id') as montototal
               FROM ingreso inner join resultado on 
               ingreso.id = resultado.idingreso 
               inner join analisis on analisis.id = resultado.idanalisis
               WHERE ingreso.id ='$id'";

        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
}
