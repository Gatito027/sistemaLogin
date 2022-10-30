<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginbd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
    $stmt = $conn -> prepare("CALL `insertarLogin`(:nombre, :clave, :fecha, :status, :usuario, :rol);");
    //$stmt = $conn->prepare("CALL insertarUsuario (firstname, lastname, email)
    //VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':clave', $clave);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':rol', $rol);
    //$stmt->bindParam(':id', $id);
    //$stmt->bindParam(':email', $email);

  // insert a row
    $nombre = $_REQUEST["txtNombre"];
    $clave = $_REQUEST["txtContrasena"];
    $fecha = $_REQUEST["txtDate"];
    $usuario=$_REQUEST["txtUsuario"];
    $rol=$_REQUEST["txtRol"];
    $status=$_REQUEST["txtStatus"];
    //$id = $_REQUEST["txtId"];
    //$email = "john@example.com";
    $stmt->execute();


    echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn  = null;
?>