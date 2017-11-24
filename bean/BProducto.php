<?php

class BProducto{
    
    public $nombre;
    public $descripcion;
    public $distribuidor;
    public $altoproducto;
    public $anchoproducto;
    public $largoproducto;

    function setAltoProducto($altoproducto) {
        $this->altoproducto = $altoproducto;
    }
    function getAltoProducto() {
        return $this->nombre;
    }

    function setAnchoProducto($anchoproducto) {
        $this->anchoproducto = $anchoproducto;
    }
    function getAnchoProducto() {
        return $this->nombre;
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