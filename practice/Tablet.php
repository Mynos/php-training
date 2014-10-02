<?php

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

class Tablet{
    
    private $bateria;
    private $listaApp;
    private $corriendo; 
    /**
     * en el constructor pone en 100 % la bateria y crea un array de apps
     */
    public function __construct() {
        $this->bateria = 100;
        $this->listaApp = array();
        $this->corriendo = FALSE;
        
    }
    
    function getListaApp() {
        return $this->listaApp;
    }

    function getCorriendo() {
        return $this->corriendo;
    }

    function setListaApp($listaApp) {
        $this->listaApp = $listaApp;
    }

    function setCorriendo($corriendo) {
        $this->corriendo = $corriendo;
    }

        /**
     * hace disminuir la bateria
     * @param double $valor
     */
    
    public function gastarBateria($valor) {
        $this->bateria -= $valor;
    }

    public function getBateria() {
        return $this->bateria;
    }

    public function getApps() {
        return $this->listaApp;
    }
    /**
     * Instala nuevas App siempre y cuando haya menos de 2 en la tablet
     * @param App $app
     */
    public function instalarApp(App $app) {
        $cantidad = count($this->getApps());
        if ($cantidad<2) {
            $this->listaApp[]=$app;
            return "se instalo perfectamente la app ".$app->getNombre();
        }  else {
            return "la tablet ya tiene 2 apps";
        }    
    }
    
    public function cerrarApp() {
        $this->setCorriendo(FALSE);
    }




    /**
     * se fija si la app esta instalada y si alcanza la bateria para correrla, en caso de que si disminuye la bat 
     * @param App $app
     * @param double $duracion
     */
    public function correrApp(App $app,$duracion) {
        if ($this->getCorriendo()===TRUE){
            return 'Hay una aplicacion corriendo';
        }  else {
            $this->setCorriendo(TRUE);
        
            $esta = array_search($app, $this->getApps());
            if (($esta !== FALSE)) {
               $totalconsumo= $app->getConsumo()*$duracion;
                if ($totalconsumo > $this->getBateria()) {
                    return 'Esa aplicacion consume mas que la bateria que tiene la tablet';
                }  else {

                    $this->gastarBateria($totalconsumo);

                    return "Aplicacion corriendo te queda ".$this->getBateria(). "% de bateria";

                } 
            }  else {
                return 'esa aplicacion no esta instalada';
        }
        
        }
    }
    


}

?>
