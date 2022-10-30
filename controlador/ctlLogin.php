<?php
include_once('../modelo/login.php');
//$objConexionBD=new ConexionBD('localhost:3306','root','','loginbd');
//$objConexionBD->conectarBD();

//echo "Bienvenido a PHP ";
/*$nombreUsuario;
$claveUsuario;*/
$nombreUsuario=$_REQUEST['txtUsuario'];
$claveUsuario=$_REQUEST['txtClave'];
$objLogin= new login($nombreUsuario,$claveUsuario);

//if($nombreUsuario=="daniel" && $claveUsuario=="mimiau"){
if($objLogin->validarLogin()){
    //session_start();
    //$_SESSION['usuarioValido']=$nombreUsuario;
    echo "Bienvenido ". $nombreUsuario;
    echo '
    <script>
        window.location.href="../vista/paginas/phps/indexAdmin.php";
    </script>
    ';
}else{
    echo "Usuario y/o contraseña incorrecta";
}
?>