<?php
class Usuario{
    //Atributos
    private $idUsuario;
    private $nombreUsuario;
    private $apellidoPaternoUsuario;
    private $apellidoMaternoUsuario;
    private $emailUsuario;
    private $telefonoUsuario;
    private $estatus;
    
    
    public function __construct($idUsuario,
    $nombreUsuario,
    $apellidoPaternoUsuario,
    $apellidoMaternoUsuario,
    $emailUsuario,
    $telefonoUsuario,
    $estatus){
        $this->idUsuario=$idUsuario;
        $this->nombreUsuario=$nombreUsuario;
        $this->apellidoPaternoUsuario=$apellidoPaternoUsuario;
        $this->apellidoMaternoUsuario=$apellidoMaternoUsuario;
        $this->emailUsuario=$emailUsuario;
        $this->telefonoUsuario=$telefonoUsuario;
        $this->estatus=$estatus;
    }
    /**
     * Get the value of nombreUsuario
     */ 
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     *
     * @return  self
     */ 
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
}
?>