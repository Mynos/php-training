<?php
/**
* @Entity @Table(name="City")
**/


class City{
    
    /** @Column(type="string") **/
    private $nombre;
    
    
    /** @Id @Column (type="integer") @GeneratedValue **/
    private $idCity;

    /** @Column(type="integer") **/
    private $codPostal;
    
    /**
    * @ManyToOne(targetEntity="Province", inversedBy="listaCiudades")
    * @JoinColumn(name="idProvince", referencedColumnName="idProvince")
    **/
    private $province;
    
    public function __construct() {
        
                
    }
    
    function setProvince($province) {
        $this->province = $province;
    }

        function getName() {
        return $this->nombre;
    }

    function getCodPostal() {
        return $this->codPostal;
    }

    function setName($nombre) {
        $this->nombre = $nombre;
    }

    function setCodPostal($codPostal) {
        $this->codPostal = $codPostal;
    }

    
}

