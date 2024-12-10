<?php
session_start();
if (!isset($_SESSION['usuarioId'])) {
    header("Location: ../Usuarios/loginU.php");
    exit();
}

// Obtener el ID de la vacante desde la URL
$idVacante = $_GET['idVacante'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Postulación</title>
    <link rel="stylesheet" type="text/css" href="../Usuarios/styles.css">
</head>
<body>
    <div class="container">
        <h1>Postulación Exitosa</h1>
        <p>Tu postulación a la vacante ha sido registrada exitosamente.</p>
        <a href="../Paginas/listarV.php" class="button">Volver a Vacantes</a>
        <a href="../Usuarios/logout.php" class="button">Cerrar Sesión</a>
    </div>
</body>
</html>