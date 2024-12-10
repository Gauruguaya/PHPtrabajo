<?php
session_start();

// Verificar si el usuario está autenticado y es un administrador
if (!isset($_SESSION['tipoUsuario']) || $_SESSION['tipoUsuario'] != 1) {
    // Redirigir o mostrar un mensaje de error si el usuario no es un administrador
    header("Location: noAutorizado.php");
    exit();
}

// Incluir archivos necesarios
include_once "../Vacantes/vacantesDAO.php";
include_once "../Vacantes/vacantes.class.php";

// Crear una instancia de VacantesDAO
$vacantesDAO = new VacantesDAO();

// Obtener datos del formulario (suponiendo que se envían por POST)
$tituloVacante = $_POST['tituloVacante'];
$ubicacionV = $_POST['ubicacionV'];
$salarioV = $_POST['salarioV'];
$descripcion = $_POST['descVacante'];
$fechaPublicacion = date("Y-m-d");
$fechaCierre = date("Y-m-d");
$estado = 1;
$usuarioId = $_SESSION['usuarioId'];


// Crear la vacante
$vacantesDAO->crearVacante($tituloVacante, $ubicacionV,
$salarioV, $descVacante, $fechaPublicacion, 
$fechaCierre, $estado, $usuarioId);

// Redirigir a la página de lista de vacantes
header("Location: listarVacantes.php");
exit();
?>