<?php
/**
* @Entity @Table(name="products")
**/
class Products
{
    
    /** @Id @Column (type="integer") @GeneratedValue **/
     
    protected $id;
    /** @Column(type="string") **/
    
    protected $name;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

 
    
}

