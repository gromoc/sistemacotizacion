<?php
class BContacto{
    
    public $email;
    public $nombre;
    public $mensaje;

    function setEmail($email) {
        $this->email = $email;
    }
    function getEmail() {
        return $this->email;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }
    function getMensaje() {
        return $this->mensaje;
    }
}
?>