<?php
class SESIONBEAN {
    public $CODSESION;
    public $NOMSESION;
    public $FECHASESION;
    public $DESCRIPSESION;
    public $CODUSUARIO;
    public $CODDOCENTE;
    public $ESTADO;
    function getCODSESION() {
        return $this->CODSESION;
    }

    function getNOMSESION() {
        return $this->NOMSESION;
    }

    function getFECHASESION() {
        return $this->FECHASESION;
    }

    function getDESCRIPSESION() {
        return $this->DESCRIPSESION;
    }

    function getCODUSUARIO() {
        return $this->CODUSUARIO;
    }

    function getCODDOCENTE() {
        return $this->CODDOCENTE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setCODSESION($CODSESION) {
        $this->CODSESION = $CODSESION;
    }

    function setNOMSESION($NOMSESION) {
        $this->NOMSESION = $NOMSESION;
    }

    function setFECHASESION($FECHASESION) {
        $this->FECHASESION = $FECHASESION;
    }

    function setDESCRIPSESION($DESCRIPSESION) {
        $this->DESCRIPSESION = $DESCRIPSESION;
    }

    function setCODUSUARIO($CODUSUARIO) {
        $this->CODUSUARIO = $CODUSUARIO;
    }

    function setCODDOCENTE($CODDOCENTE) {
        $this->CODDOCENTE = $CODDOCENTE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }


}

?>
