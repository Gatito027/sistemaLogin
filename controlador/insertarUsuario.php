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
    $stmt = $conn -> prepare("CALL `insertarUsuario`(:nombre, :apePaterno, :apeMaterno, :email, :telefono, :status);");
    //$stmt = $conn->prepare("CALL insertarUsuario (firstname, lastname, email)
    //VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apePaterno', $apePaterno);
    $stmt->bindParam(':apeMaterno', $apeMaterno);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':status', $status);
    //$stmt->bindParam(':id', $id);
    //$stmt->bindParam(':email', $email);

  // insert a row
    $nombre = $_REQUEST["txtNombre"];
    $apePaterno = $_REQUEST["txtApePaterno"];
    $apeMaterno = $_REQUEST["txtApeMaterno"];
    $email=$_REQUEST["txtEmail"];
    $telefono=$_REQUEST["txtTelefono"];
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