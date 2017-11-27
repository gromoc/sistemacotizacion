<?php
class BRegistro{
    
    public $nombreruc;
    public $dniruc;
    public $email;
    public $telefono;
    public $usuario;
    public $clave;      
    public $id;    

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
        return $this->dniruc;
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

    function setId($id){
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

   




}
?>