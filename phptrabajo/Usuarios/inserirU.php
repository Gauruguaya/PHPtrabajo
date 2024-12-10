<?php
include_once "usuariosDAO.php";

// Crear una instancia de UsuariosDAO
$usuariosDAO = new usuariosDAO();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form class="form" action="inserirU_ok.php" method="POST">
            <label for="nombreUsuario">Nombre:</label>
            <input type="text" id="nombreUsuario" name="nombreUsuario" required />
            
            <label for="emailUsuario">Email:</label>
            <input type="email" id="emailUsuario" name="emailUsuario" required/>
            
            <label for="fotoUsuario">Foto:</label>
            <input type="text" id="fotoUsuario" name="fotoUsuario" required/>
            
            <label for="linkedInUsuario">LinkedIn:</label>
            <input type="text" id="linkedInUsuario" name="linkedInUsuario" required/>
            
            <label for="contrasenaUsuario">Contraseña:</label>
            <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" required/>
            
            <input type="submit" value="Registrar"/>
        </form>
    </div>
</body>
</html>