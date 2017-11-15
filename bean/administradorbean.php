<?php

 class ADMINISTRADORBEAN {
    public $CODADMIN;
    public $NOMADMIN;
    public $APEPATERADMIN;
    public $APEMATERADMIN;
    public $EMAIL;
    public $TELEFONO;
    public $DIRECCION;
    public $FOTO;
    public $ESTADO;
    public $CODUSUARIO;
    public function getCODADMIN() {
        return $this->CODADMIN;
    }

    public function setCODADMIN($CODADMIN) {
        $this->CODADMIN = $CODADMIN;
    }

    public function getNOMADMIN() {
        return $this->NOMADMIN;
    }

    public function setNOMADMIN($NOMADMIN) {
        $this->NOMADMIN = $NOMADMIN;
    }

    public function getAPEPATERADMIN() {
        return $this->APEPATERADMIN;
    }

    public function setAPEPATERADMIN($APEPATERADMIN) {
        $this->APEPATERADMIN = $APEPATERADMIN;
    }

    public function getAPEMATERADMIN() {
        return $this->APEMATERADMIN;
    }

    public function setAPEMATERADMIN($APEMATERADMIN) {
        $this->APEMATERADMIN = $APEMATERADMIN;
    }

    public function getEMAIL() {
        return $this->EMAIL;
    }

    public function setEMAIL($EMAIL) {
        $this->EMAIL = $EMAIL;
    }

    public function getTELEFONO() {
        return $this->TELEFONO;
    }

    public function setTELEFONO($TELEFONO) {
        $this->TELEFONO = $TELEFONO;
    }

    public function getDIRECCION() {
        return $this->DIRECCION;
    }

    public function setDIRECCION($DIRECCION) {
        $this->DIRECCION = $DIRECCION;
    }

    public function getFOTO() {
        return $this->FOTO;
    }

    public function setFOTO($FOTO) {
        $this->FOTO = $FOTO;
    }

    public function getESTADO() {
        return $this->ESTADO;
    }

    public function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    public function getCODUSUARIO() {
        return $this->CODUSUARIO;
    }

    public function setCODUSUARIO($CODUSUARIO) {
        $this->CODUSUARIO = $CODUSUARIO;
    }


}

?>
