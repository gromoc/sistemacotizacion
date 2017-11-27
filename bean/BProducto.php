<?php

class BProducto{
    
    public $nombre;
    public $descripcion;
    public $distribuidor;
    public $altoproducto;
    public $anchoproducto;
    public $largoproducto;
    public $id;    
    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setAltoProducto($altoproducto) {
        $this->altoproducto = $altoproducto;
    }
    function getAltoProducto() {
        return $this->altoproducto;
    }

    function setAnchoProducto($anchoproducto) {
        $this->anchoproducto = $anchoproducto;
    }
    function getAnchoProducto() {
        return $this->anchoproducto;
    }

    function setLargoProducto($largoproducto) {
        $this->largoproducto = $largoproducto;
    }
    function getLargoProducto() {
        return $this->largoproducto;
    }




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
    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    function getCategoria() {
        return $this->categoria;
    }



}


?>