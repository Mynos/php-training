<?php
namespace Tablet; 

class App {
    private $nombre;
    private $consumo;
    
    public function __construct($nombre,$consumo) {
        $this->nombre = $nombre;
        $this->consumo = $consumo;           
                
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setConsumo($consumo) {
        $this->consumo = $consumo;
    }

        
    public function getNombre() {
        return $this->nombre;
    }

    public function getConsumo() {
        return $this->consumo;
    }


}

?>