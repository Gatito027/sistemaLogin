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
    $stmt = $conn -> prepare("CALL `actualizarRol`(:nombre, :descripcion, :id);");
    //$stmt = $conn->prepare("CALL insertarUsuario (firstname, lastname, email)
    //VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':id', $id);
    //$stmt->bindParam(':email', $email);

  // insert a row
    $nombre = $_REQUEST["txtNombre"];
    $descripcion = $_REQUEST["txtDescripcion"];
    $id = $_REQUEST["txtId"];
    //$email = "john@example.com";
    $stmt->execute();


    echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn  = null;
?>