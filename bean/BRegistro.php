<?php
class BRegistro{
    
    public $nombreruc;
    public $dniruc;
    public $email;
    public $telefono;
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

    function setNombreruc($nombreruc){
        $this->nombreruc = $nombreruc;
    }

    function getNombreruc() {
        return $this->nombreruc;
    }

    function setDniRuc($dniruc){
        $this->dniruc = $dniruc;
    }

    function getDniRuc() {
        return $this->cldnirucave;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    function getTelefono() {
        return $this->telefono;
    }

   




}
?>