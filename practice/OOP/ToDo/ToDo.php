<?php



class Tarea{
    private $idTarea;
    private $nombre;
    private $status;
    
    
    public function __construct($id,$nombre) {
        $this->idTarea;
        $this->nombre;
        $this->status="New";
    }
    
    public function getIdTarea() {
        return $this->idTarea;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setIdTarea($idTarea) {
        $this->idTarea = $idTarea;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

        
    public function cambiarStatus($param) {
        $this->status=$param; 
        
    }
    
}

class Usuario {
    private  $nombre;
    private $listaTareas;


    public function __construct($nombre) {
        $this->nombre=$nombre;
        $this->listaTareas = array();
    }
    
    function getListaTareas() {
        return $this->listaTareas;
    }

    public function setListaTareas($listaTareas) {
        $this->listaTareas = $listaTareas;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function agregarTarea(Tarea $tarea){
        $this->listaTareas[] = $tarea; 
    }
    
    public function buscarTarea(Tarea $tarea) {
         $esta = array_search($tarea, $this->getListaTareas());
        if (($esta !== FALSE)) {
            
            return $this->listaTareas[$esta];
        }  else {
            
                    
            return FALSE;
        }
    }
    
    public function borrarArchivados(){
        foreach ($this->listaTareas as $key => $value) {
            if ($value->getStatus()== "Archived"){
                unset($this->listaTareas[$value]);
            }
        }
    }
    
}

class Tablero{
    
    private $idTablero;
    private $tituloTablero;
    private $listaUsuarios;


    public function __construct($id,$titulo) {
        $this->idTablero=$id;
        $this->tituloTablero=$titulo; 
        $this->listaUsuarios = array();
    }
    
    public function getIdTablero() {
        return $this->idTablero;
    }

    public function getTituloTablero() {
        return $this->tituloTablero;
    }

    public function setIdTablero($idTablero) {
        $this->idTablero = $idTablero;
    }

    public function setTituloTablero($tituloTablero) {
        $this->tituloTablero = $tituloTablero;
    }
    
    public function getListaUsuarios() {
        return $this->listaUsuarios;
    }

    public function setListaUsuarios($listaUsuarios) {
        $this->listaUsuarios = $listaUsuarios;
    }
    
    public function agregarUsuario (Usuario $usuario){
        $this->listaUsuarios[]= $usuario;
        
    }
    
    public function buscarUsuario(Usuario $usuario){
        $esta = array_search($usuario, $this->getListaUsuarios());
        if (($esta !== FALSE)) {
            
            return $this->listaUsuarios[$esta];
        }  else {
            $this->listaUsuarios[]=$usuario;
                    
            return $this->buscarUsuario($usuario);
        }
    }
    
    
    public function revisarTarea (Tarea $tarea){
        foreach ($this->getListaUsuarios() as $key => $value) {
            $tarea = $value->buscarTarea($tarea);
            if ( $tarea === FALSE){
                return FALSE;
            }
        }
        if ($tarea !== FALSE) {
            return TRUE;
        }
    } 
    
    public function asignarTareaUsuario (Tarea $tarea,  Usuario $usuario ){
            $bool = $this->revisarTarea($tarea);
            if ($bool === FALSE) {
                $tarea->cambiarStatus("Assigned");
                $this->buscarUsuario($usuario)->agregarTarea($tarea);
            }  else {
                return 'un usuario ya tiene asignada esa tarea';
                
            }
       
    }
    
    public function limpiarArchivados (){
        foreach ($this->listaUsuarios as $key => $value) {
            $value->borrarArchivados();
        }
    }
    }





