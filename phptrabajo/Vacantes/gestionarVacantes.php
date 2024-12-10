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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['crear'])) {
        $tituloVacante = $_POST['tituloVacante'];
        $ubicacionV = $_POST['ubicacionV'];
        $salarioV = $_POST['salarioV'];
        $descVacante = $_POST['descVacante'];
        $fechaPublicacion = date("Y-m-d");
        $contacto = $_POST['contacto'];
        $imagen = $_POST['imagen'];
        $estado = 1;
        $usuarioId = $_SESSION['usuarioId'];
        $vacantesDAO->crearVacante($tituloVacante, $ubicacionV, $salarioV, $descVacante, $fechaPublicacion, $contacto, $imagen, $estado, $usuarioId);
        header("Location: gestionarVacantes.php");
        exit();
    } elseif (isset($_POST['desactivar'])) {
        $idVacante = $_POST['idVacante'];
        $vacantesDAO->desativarVacante($idVacante);
        header("Location: gestionarVacantes.php");
        exit();
    } elseif (isset($_POST['activar'])) {
        $idVacante = $_POST['idVacante'];
        $vacantesDAO->ativarVacante($idVacante);
        header("Location: gestionarVacantes.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestionar Vacantes</title>
    <link rel="stylesheet" type="text/css" href="../Usuarios/styles.css">
</head>
<body>
    <div class="container">
        <h1>Gestionar Vacantes</h1>
        <form class="form" method="POST">
            <h2>Crear Vacante</h2>
            <label for="tituloVacante">Título:</label>
            <input type="text" id="tituloVacante" name="tituloVacante" required/><br />
            
            <label for="ubicacionV">Ubicación:</label>
            <input type="text" id="ubicacionV" name="ubicacionV" required/><br />
            
            <label for="salarioV">Salario $:</label>
            <input type="text" id="salarioV" name="salarioV" required/><br />
            
            <label for="descVacante">Descripción:</label>
            <input type="text" id="descVacante" name="descVacante" required/><br />
            
            <label for="contacto">Contacto:</label>
            <input type="text" id="contacto" name="contacto" required/><br />
            
            <label for="imagen">Imagen:</label>
            <input type="text" id="imagen" name="imagen" required/><br />
            
            <input type="submit" name="crear" value="Crear Vacante"/>
        </form>
        <h2>Vacantes Activas</h2>
        <ul>
            <?php foreach ($vacantes as $vacante): ?>
                <?php if ($vacante['estado'] == 1): ?>
                    <li class="vacante">
                        <h3><?php echo htmlspecialchars($vacante['tituloVacante']); ?></h3>
                        <p><?php echo htmlspecialchars($vacante['descVacante']); ?></p>
                        <p>Ubicación: <?php echo htmlspecialchars($vacante['ubicacionV']); ?></p>
                        <p>Salario $: <?php echo htmlspecialchars($vacante['salarioV']); ?></p>
                        <p>Contacto: <?php echo htmlspecialchars($vacante['contacto']); ?></p>
                        <img src="<?php echo htmlspecialchars($vacante['imagen']); ?>" alt="Imagen de la vacante" width="100">
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="idVacante" value="<?php echo htmlspecialchars($vacante['idVacante']); ?>"/>
                            <button type="submit" name="desactivar" class="vacante-action">Desactivar</button>
                        </form>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>Vacantes Inactivas</h2>
        <ul>
            <?php foreach ($vacantes as $vacante): ?>
                <?php if ($vacante['estado'] == 0): ?>
                    <li class="vacante">
                        <h3><?php echo htmlspecialchars($vacante['tituloVacante']); ?></h3>
                        <p><?php echo htmlspecialchars($vacante['descVacante']); ?></p>
                        <p>Ubicación: <?php echo htmlspecialchars($vacante['ubicacionV']); ?></p>
                        <p>Salario $: <?php echo htmlspecialchars($vacante['salarioV']); ?></p>
                        <p>Contacto: <?php echo htmlspecialchars($vacante['contacto']); ?></p>
                        <img src="<?php echo htmlspecialchars($vacante['imagen']); ?>" alt="Imagen de la vacante" width="100">
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="idVacante" value="<?php echo htmlspecialchars($vacante['idVacante']); ?>"/>
                            <button type="submit" name="activar" class="vacante-action">Activar</button>
                        </form>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>