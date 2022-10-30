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
    $stmt = $conn -> prepare("CALL `eliminarLogin`(:id);");
    
    $stmt->bindParam(':id', $id);

  // insert a row
    $id = $_REQUEST["txtId"];
    //$email = "john@example.com";
    $stmt->execute();


    echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn  = null;
?>