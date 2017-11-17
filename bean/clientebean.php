<?php
class clientebean{
    public $id;
    public $dniruc;
    public $nombrersocial;
    public $email;
    public $numero;
    function getId() {
        return $this->id;
    }

    function getDniruc() {
        return $this->dniruc;
    }

    function getNombrersocial() {
        return $this->nombrersocial;
    }

    function getEmail() {
        return $this->email;
    }

    function getNumero() {
        return $this->numero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDniruc($dniruc) {
        $this->dniruc = $dniruc;
    }

    function setNombrersocial($nombrersocial) {
        $this->nombrersocial = $nombrersocial;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }


    
}
?>