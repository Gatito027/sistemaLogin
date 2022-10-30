<?php
class ConexionBD{
    //atributos
    public $serverName;
    public $userName;
    public $userPassword;
    public $bdName;
    //public $hostBD;
    public $dsn;

    public $conn; //objeto de conexion a bd
    //constructor
    public function __construct($serverName,$userName,$userPassword,$bdName){
        $this->serverName=$serverName;
        $this->userName=$userName;
        $this->userPassword=$userPassword;
        $this->bdName=$bdName;
        /*$this->hostBD=$hostBD;*/
    }
    //metodos SET y GET
    public function setServerName($serverName){
        $this->serverName=$serverName;
    }
    public function getServerName(){
        return $this->serverName;
    }
    //metodos
    public function conectarBD(){
        $this->dsn="mysql:host=$this->serverName;dbname=$this->bdName";
        try{
            $this->conn=new PDO($this->dsn,$this->userName,$this->userPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($this->conn)){
                //echo '<h1>Conexion exitosa n.n</h1>';
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo 'La Conexion fallo: '. $e->getMessage();
            return false;
        }
    }
}
?>