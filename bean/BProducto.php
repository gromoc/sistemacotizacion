<?php

class BProducto{
    
    public $nombre;
    public $descripcion;
    public $distribuidor;

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    function getDescripcion() {
        return $this->descripcion;
    }
    function setDistribuidor($distribuidor) {
        $this->distribuidor = $distribuidor;
    }
    function getDistribuidor() {
        return $this->distribuidor;
    }



}


?>