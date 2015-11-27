<?php

include './model/accesodb.php';

class Reporte{
    public function MostrarGraficoAcuenta($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "SELECT DISTINCT MONTHNAME( ingreso.fecha ) AS mes, SUM( documento.monto ) AS montoCuenta
                FROM ingreso
                INNER JOIN documento ON ingreso.id = documento.idingreso
                WHERE YEAR( ingreso.fecha ) = YEAR( CURDATE( ) ) 
                GROUP BY MONTHNAME( ingreso.fecha ) 
                ORDER BY MONTHNAME( ingreso.fecha ) ASC 
                LIMIT 1";
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    public function MostrarGraficoSaldo($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "SELECT DISTINCT MONTHNAME( ingreso.fecha ) AS mes, SUM( analisis.precio ) AS montoTotal
            FROM ingreso
            INNER JOIN resultado ON resultado.idingreso = ingreso.id
            INNER JOIN analisis ON analisis.id = resultado.idanalisis
            WHERE YEAR( ingreso.fecha ) = YEAR( CURDATE( ) ) 
            GROUP BY MONTHNAME( ingreso.fecha ) 
            ORDER BY MONTHNAME( ingreso.fecha ) ASC 
            LIMIT 1";
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    
}

