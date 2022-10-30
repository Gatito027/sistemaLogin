<?php
class RolUsuario{
    //Atributos
    private $idRolUsuario;
    private $nombreRolUsuario;
    private $descripcion;
    //constructor
    public function _constructor($nombreRolUsuario,$descripcion){
        $this->nombreRolUsuario=$nombreRolUsuario;
        $this->descripcion=$descripcion;
    }
    //metodos set y get
    /**
     * Get the value of idRolUsuario
     */ 
    public function getIdRolUsuario()
    {
        return $this->idRolUsuario;
    }

    /**
     * Set the value of idRolUsuario
     *
     * @return  self
     */ 
    public function setIdRolUsuario($idRolUsuario)
    {
        $this->idRolUsuario = $idRolUsuario;

        return $this;
    }
    public function setNombreRolUsuario($nombreRolUsuario){
        $this->nombreRolUsuario=$nombreRolUsuario;
    }
    public function getNombreRolUsuario(){
        return $this->nombreRolUsuario;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    //metodos para el CRUD
    public function insertarRolUsuario(){
        //codigo para insertar rol usuario
    }
    public function modificarRolUsuario(){
        //codigo para insertar rol usuario
    }
    public function eliminarRolUsuario(){
        //codigo para insertar rol usuario
    }
    public function consultarRolUsuario(){
        //codigo para insertar rol usuario
    }
    
}
?>