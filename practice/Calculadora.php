<?php

class Calculadora {
    private  $resultado;
    
    
    public function __construct() {
        $this->resultado=0.0;
        
    }
    
    
    public function __setResultado( $value) {
        $this->resultado = $value;
    }
    
    public function __getResultado() {
        return $this->resultado;
    }
    /**
     * 
     * @param double $param
     * @return double
     */        
    public function sumar($param) {
        $valor= ($this->__getResultado()+$param);
        $this->__setResultado($valor);
        return $this->__getResultado();
        
    }
    /**
     * 
     * @param double $param
     * @return double
     */ 
    public function restar($param) {
        $valor= ($this->__getResultado()-$param);
        $this->__setResultado($valor);
        return $this->__getResultado();
    
    }
   /**
     * 
     * @param double $param
     * @return double
     */ 
    public function multiplicar($param) {
        if(($this->__getResultado()===0.0) and ($param === 0)){
            $this->__setResultado($param);
            return $this->__getResultado();
        }
        $valor= ($this->__getResultado()*$param);
        $this->__setResultado($valor);
        return $this->__getResultado();
    }
    /**
     * 
     * @param double $param
     * @return double
     */ 
    public function dividir($param) {
        if ($param===0){
             echo 'no se puede dividir por 0';
        }else{
            $valor= ($this->__getResultado()/$param);
            $this->__setResultado($valor);
            return $this->__getResultado();
        }
        }
     /**
      * pone en 0 el resultado
      */       
     public function limpiar(){
         $this->resultado=0.0;
     }
     /**
     * 
     * @param double $param
     * @return double
     */ 
     public function potencia($param) {
         if(($this->__getResultado()===0.0) and ($param === 0)){
            $this->__setResultado($param);
            return $this->__getResultado();
        }
         $valor= pow($this->__getResultado(), $param);
         $this->__setResultado($valor);
         return $this->__getResultado();
     }
        
    }
    
    ?>
