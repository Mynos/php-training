<?php
/**
* @Entity @Table(name="Province")
**/
class Province {
    
    /** @Column(type="string") **/
    private $nombre;
    
    /** @Id @Column (type="integer") @GeneratedValue **/
    private $idProvince;
    
    /** @Column (type="integer") **/
    private $numProvincia;
    
   /**
   * @OneToMany(targetEntity="City", mappedBy="province")
   **/
    private $listaCiudades;
    
    function __construct() {
        
        $this->listaCiudades= new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    function getName() {
        return $this->nombre;
    }

    function getNumProvincia() {
        return $this->numProvincia;
    }

    function setName($nombre) {
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

    function agregarCiudades(City $ciudad){
        $this->listaCiudades->add($ciudad);
    }



}


?>

