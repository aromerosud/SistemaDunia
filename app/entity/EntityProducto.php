<?php
require_once realpath(__DIR__ . '/../model/ModelProducto.php');

class EntityAlumno {

    protected $_id;
    protected $_tipo;
    protected $_descripcion;
    protected $_unidadmedida;
    protected $_precio;
    protected $_idusuario;

    function indentify($id) {
        $modelProducto = new ModelProducto();
        $data = $modelProducto->getProducto($id);
        $this->_id = $data['idproducto'];
        $this->_tipo = $data['tipo'];
        $this->_descripcion = $data['descripcion'];
        $this->_unidadmedida = $data['unidadmedida'];
        $this->_precio = $data['precio'];
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

    function getUnidadMedida() {
        return $this->_unidadmedida;
    }

    function setUnidadMedida($unidadMedida) {
        $this->_unidadmedida = $unidadMedida;
    }

    function getPrecio() {
        return $this->_precio;
    }

    function setPrecio($precio) {
        $this->_precio = $precio;
    }

    function save() {
        $modelProducto = new ModelProducto();
        $data['tipo'] = $this->_tipo;
        $data['descripcion'] = $this->_descripcion;
        $data['unidadmedida'] = $this->_unidadmedida;
        $data['precio'] = $this->_precio;
        $data['idusuario'] = $this->_idusuario;
        if ($this->_id != '') {
            $modelProducto->updateProducto($data, $this->_id);
        } else {
            $this->_id = $modelProducto->insertProducto($data);
            unset($data);
            $modelProducto->updateProducto($data, $this->_id);
        }
    }
    
    function delete() {
        $modelProducto = new ModelProducto();
        return $modelProducto->deleteProducto($this->_id);
    }

    static function getAllProducto() {
        $modelProducto = new ModelProducto();
        return $modelProducto->getAllProducto();
    }

}


