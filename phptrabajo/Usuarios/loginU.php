<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <form class="form" action="loginU_ok.php" method="POST">
            <label for="emailUsuario">Email:</label>
            <input type="email" id="emailUsuario" name="emailUsuario" required/><br />
            
            <label for="contrasenaUsuario">Contraseña:</label>
            <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" required/><br />
            
            <button type="submit" class="button">Enviar</button>
        </form>
    </div>
</body>
</html>