<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/cssFormulario.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <ul>
            <p>
            <div id="formularioUsuario">
                <form id="frmUsuario" name="frmUsuario" action="../../../controlador/eliminarUsuario.php" class="was-validated" method="post">
                    <label for="">
                        <h1 id="titulo">Usuarios</h1>
                    </label>
                    <br>
                    <div id="form-group">
                        <label for="uname">ID:</label><br>
                        <input type="text" name="txtId" id="txtid uname" class="form-control"
                            placeholder="id del rol" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <!--<div id="form-group">
                        <label for="uname">Nombre:</label><br>
                        <input type="text" name="txtNombre" id="txtNombre uname" class="form-control"
                            placeholder="Ingresa un nombre" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Descripcion:</label><br>
                        <input type="text" name="txtDescripcion" id="txtDescripcion uname" class="form-control"
                            placeholder="Ingresa una descripcion" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>-->
                    <br>
                    <input type="submit" value="Borrar" name="btnBorrar" id="btnBorrar" class="btn btn-danger"">
                    <input type="reset" value="Cancelar" name="btnCancelar" id="btnCancelar" class="btn btn-warning">
                    <!--<input type="button" value="Editar" name="btnEditar" id="btnEditar" class="btn btn-dark">-->
                    <!--<input type="button" value="Borrar" name="btnBorrar" id="btnBorrar" class="btn btn-danger" onclick="location.hrref='../../../controlador/eliminarRolUsuario.php'">-->
                    <!--<a id="btnBorrar" class="btn btn-danger" hrref="../../../controlador/eliminarRolUsuario.php">Borrar</a>-->
                </form>
            </div>
            </p></br>
        </ul>
    </div>
</body>
<?php
echo "<div id='tabla'><label for=''>
<h1 id='titulo'>Usuarios BD</h1>
</label>";
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
echo "</table></div>";
?>
</html>