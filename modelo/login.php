<?php
include_once('RolUsuario.php');
include_once('usuario.php');
include_once('ConexionBD.php');
class Login{
    private $idLogin;
    private $nombreLogin;
    private $claveLogin;
    private $fechaCreacionLogin;
    private $estatusLogin;

    public RolUsuario $objRolUsuario;
    public Usuario $objUsuario;
    public ConexionBD $objConexionBD;
    private $stmt;

    public function getNombreLogin()
    {
        return $this->nombreLogin;
    }


    public function setNombreLogin($nombreLogin)
    {
        $this->nombreLogin = $nombreLogin;

        return $this;
    }
    
    public function __construct($nombreLogin, $claveLogin)
    {
        $this->nombreLogin = $nombreLogin;
        $this->claveLogin=$claveLogin;
    }
    //metodos  para crud
    public function validarLogin(){
        $objConexionBD= new ConexionBD('localhost:3306','root','','loginbd');
        try{
            if($objConexionBD->conectarBD()){
            $this->stmt=$objConexionBD->conn->prepare('call sp_validarLogin(:nombreLogin, :claveLogin)');
            $this->stmt->bindParam(':nombreLogin',$this->nombreLogin);
            $this->stmt->bindParam(':claveLogin',$this->claveLogin);
            $this->stmt->execute();
            //$datosConsulta=$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datosConsulta=$this->stmt->fetchAll();
            session_start();
            foreach ($datosConsulta as $datos){
                $_SESSION['usuarioValido']=$datos[0];
                $_SESSION['claveLogin']=$datos[1];
                if(isset($_SESSION['usuarioValido'])){
                    return true;
                }else{
                    return false;
                }

            }}
        }catch(PDOException $e){
            echo "Un error a ocurido: ". $e->getMessage();
        }
    }
}
?>