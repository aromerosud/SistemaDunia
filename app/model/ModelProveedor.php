<?php
require_once realpath(__DIR__.'/Model.php');
class ModelProveedor extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'proveedor';
        $this->_primaryKey = 'proveedor_id';
    }
    
    public function getAllProveedor(){
        return $this->_conection->ejecuteSql('select * from proveedor')->fetchAll();
    }
    
    public function getProveedor($idProveedor){
        return $this->_conection->ejecuteSql('select * from proveedor where proveedor_id = "'.$idProveedor.'"')->fetch();
    }
    
    public function getProveedorForCodigo($codigoProveedor){
        return $this->_conection->ejecuteSql('select * from proveedor where proveedor_codigo = "'.$codigoProveedor.'"')->fetch();
    }


    public function insertProveedor($data){
        $this->_conection->ejecuteSql($this->prepareInsertSql($data));
        return $this->_conection->getLastInsertId();
    }
    
    public function updateProveedor($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteProveedor($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
}
