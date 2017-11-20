<?php
class BRegistro{
    
    public $usuario;
    public $clave;

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    function getUsuario() {
        return $this->usuario;
    }
    function setClave($clave) {
        $this->clave = $clave;
    }
    function getclave() {
        return $this->clave;
    }
}
?>