<?php
require_once realpath(__DIR__ . '/../model/ModelComida.php');

class EntityAlumno {

    protected $_id;
    protected $_tipo;
    protected $_descripcion;   
    protected $_idusuario;

    function indentify($id) {
        $modelComida = new ModelComida();
        $data = $modelComida->getProducto($id);
        $this->_id = $data['idcomida'];
        $this->_tipo = $data['tipo'];
        $this->_descripcion = $data['descripcion'];
        $this->_idusuario = $data['idusuario'];
        return $data;
    }

    function getId() {
        return $this->_id;
    }
    
    function setTipo($tipo) {
        $this->_tipo = $tipo;
    }

    function getTipo() {
        return $this->_tipo;
    }

    function setDescripcion($descripcion) {
        $this->_descripcion = $descripcion;
    }

    function getDescripcion() {
        return $this->_descripcion;
    }

    

    function save() {
        $modelComida = new ModelComida();
        $data['tipo'] = $this->_tipo;
        $data['descripcion'] = $this->_descripcion;
        $data['idusuario'] = $this->_idusuario;
        if ($this->_id != '') {
            $modelComida->updateComida($data, $this->_id);
        } else {
            $this->_id = $modelComida->insertComida($data);
            unset($data);
            $modelComida->updateComida($data, $this->_id);
        }
    }
    
    function delete() {
        $modelProducto = new ModelComida();
        return $modelProducto->deleteComida($this->_id);
    }

    static function getAllComida() {
        $modelProducto = new ModelComida();
        return $modelProducto->getAllComida();
    }

}


