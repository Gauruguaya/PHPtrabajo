<?php
session_start();
if (!isset($_SESSION['tipoUsuario']) || $_SESSION['tipoUsuario'] != 1) {
    header("Location: ../Usuarios/loginU.php");
    exit();
}

include_once "../Vacantes/vacantesDAO.php";
include_once "../Vacantes/vacantes.class.php";

$vacantesDAO = new VacantesDAO();
$vacantes = $vacantesDAO->listarVacantes();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menú de Administración</title>
    <link rel="stylesheet" type="text/css" href="../Usuarios/styles.css">
</head>
<body>
    <div class="container">
        <h1>Menú de Administración</h1>
        <ul class="menu">
            <li><a href="../Vacantes/gestionarVacantes.php">Gestionar Vacantes</a></li>
            <li><a href="../Paginas/listarV.php">Listar Vacantes</a></li>
            <li><a href="../Usuarios/logout.php">Logout</a></li>
        </ul>
        <h2>Vacantes</h2>
        <ul>
            <?php foreach ($vacantes as $vacante): ?>
                <li>
                    <h3><?php echo htmlspecialchars($vacante['tituloVacante']); ?></h3>
                    <a href="../Paginas/listarPostulaciones.php?idVacante=<?php echo htmlspecialchars($vacante['idVacante']); ?>" class="button">Ver Postulaciones</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>