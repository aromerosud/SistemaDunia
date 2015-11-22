<?php
require_once realpath(__DIR__.'/Model.php');
class ModelProducto extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'producto';
        $this->_primaryKey = 'idproducto';
    }
    
    public function getAllProducto(){
        return $this->_conection->ejecuteSql('select * from producto')->fetchAll();
    }
    
    public function getProducto($idProducto){
        return $this->_conection->ejecuteSql('select * from producto where idproducto = "'.$idProducto.'"')->fetch();
    }
    

    public function insertProducto($data){
        $this->_conection->ejecuteSql($this->prepareInsertSql($data));
        return $this->_conection->getLastInsertId();
    }
    
    public function updateProducto($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteProducto($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
}

