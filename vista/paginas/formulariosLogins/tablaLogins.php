<?php
echo '<link rel="stylesheet" href="../../vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="../../css/cssFormulario.css">';
echo "<label for=''>
<h1 id='titulo'>Logins BD</h1>
</label>";
echo "<table style='border: solid 1px black;' class='table table-hover table-dark'>";
echo "<tr><th>Id</th>
<th>Nombre</th>
<th>Clave</th>
<th>Fecha</th>
<th>Status</th>
<th>Rol</th>
<th>Usuario</th>
</tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "loginbd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("CALL obtenerLogin();");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>