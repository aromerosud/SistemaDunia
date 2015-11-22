<?php
require_once realpath(__DIR__.'/Model.php');
class ModelComida extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'comida';
        $this->_primaryKey = 'idcomida';
    }
    
    public function getAllComida(){
        return $this->_conection->ejecuteSql('select * from comida')->fetchAll();
    }
    
    public function getComida($idComida){
        return $this->_conection->ejecuteSql('select * from comida where idcomida = "'.$idComida.'"')->fetch();
    }
    

    public function insertComida($data){
        $this->_conection->ejecuteSql($this->prepareInsertSql($data));
        return $this->_conection->getLastInsertId();
    }
    
    public function updateComida($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteComida($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
}



