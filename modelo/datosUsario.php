<!DOCTYPE html>
<html>
<body>

<?php
echo '<link rel="stylesheet" href="../vista/vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css">';
echo "<table style='border: solid 1px black;' class='table table-hover table-dark'>";
echo "<tr><th>Id</th>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>E-mail</th>
<th>Telefono</th>
<th>Status</th></tr>";

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
    $stmt = $conn->prepare("CALL ObtenerUsuarios();");
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

</body>
</html>