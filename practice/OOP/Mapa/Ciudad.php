<?php

namespace Mapa;

class Ciudad{
    private $nombre;
    private $codPostal;
    
    public function __construct($nombre,$codPostal) {
        $this->nombre=$nombre;
        $this->codPostal=$codPostal;
                
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCodPostal() {
        return $this->codPostal;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCodPostal($codPostal) {
        $this->codPostal = $codPostal;
    }

    
}

