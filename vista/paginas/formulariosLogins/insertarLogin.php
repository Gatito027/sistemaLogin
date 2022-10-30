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
                <form id="frmUsuario" name="frmUsuario" action="../../../controlador/insertarLogin.php" class="was-validated" method="post">
                    <label for="">
                        <h1 id="titulo">Logins</h1>
                    </label>
                    <br>
                    <!--<div id="form-group">
                        <label for="uname">ID:</label><br>
                        <input type="text" name="txtId" id="txtid uname" class="form-control"
                            placeholder="id del login">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>-->
                    <div id="form-group">
                        <label for="uname">Nombre:</label><br>
                        <input type="text" name="txtNombre" id="txtNombre uname" class="form-control"
                            placeholder="Ingresa un nombre" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Contraseña:</label><br>
                        <input type="password" name="txtContrasena" id="txtContrasena uname" class="form-control"
                            placeholder="Ingresa una contraseña" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Fecha:</label><br>
                        <input type="date" name="txtDate" id="txtDate uname" class="form-control"
                            placeholder="Ingresa una fecha" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Status:</label><br>
                        <input type="text" name="txtStatus" id="txtStatus uname" class="form-control"
                            placeholder="Ingresa un estado" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Rol:</label><br>
                        <input type="text" name="txtRol" id="txtRol uname" class="form-control"
                            placeholder="Ingresa una id de rol" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <div id="form-group">
                        <label for="uname">Usuario:</label><br>
                        <input type="text" name="txtUsuario" id="txtUsuario uname" class="form-control"
                            placeholder="Ingresa una id de usuario" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Llena este campo.</div>
                    </div>
                    <br>
                    <input type="submit" value="Enviar" name="btnEntrar" id="btnEntrar" class="btn btn-primary">
                    <input type="reset" value="Cancelar" name="btnCancelar" id="btnCancelar" class="btn btn-warning">
                    <!--<input type="button" value="Editar" name="btnEditar" id="btnEditar" class="btn btn-dark">
                    <input type="button" value="Borrar" name="btnBorrar" id="btnBorrar" class="btn btn-danger">-->
                </form>
            </div>
            </p></br>
        </ul>
    </div>
</body>
</html>