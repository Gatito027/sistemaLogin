<?php
session_start();
if(isset($_SESSION['usuarioValido'])){
    //destruir sesion
    session_unset();
    session_destroy();
    echo '
    <script>
        window.location.href="../../../index.html";
    </script>';
}else{
    echo "No has iniciado session";
}
?>