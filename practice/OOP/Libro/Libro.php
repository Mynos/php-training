<?php

class Capitulo {

    private $titulo;
    private $texto;
    private $paginaInicial;

    public function __construct($titulo, $texto, $pagina) {
        $this->texto = $texto;
        $this->titulo = $titulo;
        $this->paginaInicial = $pagina;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getPaginaInicial() {
        return $this->paginaInicial;
    }

    public function setPaginaInicial($paginaInicial) {
        $this->paginaInicial = $paginaInicial;
    }

}

class Libro {

    private $nombreLibro;
    private $isbn;
    private $listaCapitulos;

    public function __construct($nombre, $isbn) {
        $this->isbn = $isbn;
        $this->nombreLibro = $nombre;
        $this->listaCapitulos = array();
    }

    public function getNombreLibro() {
        return $this->nombreLibro;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setNombreLibro($nombreLibro) {
        $this->nombreLibro = $nombreLibro;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function getListaCapitulos() {
        return $this->listaCapitulos;
    }

    function setListaCapitulos($listaCapitulos) {
        $this->listaCapitulos = $listaCapitulos;
    }

    public function agregarCapitulo(Capitulo $capitulo) {
        $this->listaCapitulos[] = $capitulo;
    }

    public function indice() {
        $listaIndices = array();
        foreach ($this->listaCapitulos as $key => $value) {
            $listaIndices[] = array($value->getTitulo(),$value->getPaginaInicial());
        }
        return $listaIndices;
    }

}
?>

