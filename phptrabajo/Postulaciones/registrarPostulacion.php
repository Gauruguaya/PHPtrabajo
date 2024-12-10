<?php
include_once "../Postulaciones/PostulacionesDAO.php";
include_once "../Usuarios/Usuario.php";

// Suponiendo que el usuario está autenticado y su ID está en la sesión
session_start();
if (!isset($_SESSION['usuarioId'])) {
    header("Location: ../Usuarios/loginU.php");
    exit();
}

// Obtener el ID de la vacante desde la URL
$idVacante = $_GET['idVacante'];
$usuarioId = $_SESSION['usuarioId'];

// Crear una instancia de PostulacionesDAO
$postulacionesDAO = new PostulacionesDAO();

// Registrar la postulación
$postulacionesDAO->registrarPostulacion($usuarioId, $idVacante);

// Redirigir a la página de confirmación
header("Location: ../Postulaciones/confirmacionPostulacion.php?idVacante=$idVacante");
exit();
?>