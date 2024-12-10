<?php
	include_once "../Usuarios/usuariosDAO.php";
	// Obtener los datos del formulario
$nombreUsuario = $_POST['nombreUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$fotoUsuario = $_POST['fotoUsuario'];
$linkedInUsuario = $_POST['linkedInUsuario'];
$contrasenaUsuario = $_POST['contrasenaUsuario'];

// Crear una instancia de UsuariosDAO
$usuariosDAO = new usuariosDAO();
	
	// Registrar el usuario
	$usuario = new Usuario($nombreUsuario, $emailUsuario, $fotoUsuario, $linkedInUsuario, $contrasenaUsuario);
	$usuarioId = $usuariosDAO->inserir($usuario);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <?php if ($usuarioId): ?>
            <h1>Usuario registrado exitosamente</h1>
            <a href="loginU.php">Iniciar sesión</a>
        <?php else: ?>
            <h1>Error al registrar el usuario</h1>
        <?php endif; ?>
    </div>
</body>
</html>