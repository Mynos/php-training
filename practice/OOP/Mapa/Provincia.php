<?php

namespace Mapa;

class Provincia {
    
    private $nombre;
    private $numProvincia;
    private $listaCiudades;
    
    function __construct($nombre,$numProvincia) {
        $this->nombre=$nombre;
        $this->numProvincia=$numProvincia;
        $this->listaCiudades= array();
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getNumProvincia() {
        return $this->numProvincia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNumProvincia($numProvincia) {
        $this->numProvincia = $numProvincia;
    }
    
    function getListaCiudades() {
        return $this->listaCiudades;
    }

    function setListaCiudades($listaCiudades) {
        $this->listaCiudades = $listaCiudades;
    }

    function agregarCiudades(Ciudad $ciudad){
        $this->listaCiudades[]=$ciudad;
    }



}


?>

