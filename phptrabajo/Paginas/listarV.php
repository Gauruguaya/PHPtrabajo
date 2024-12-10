<?php
include_once "../Vacantes/vacantesDAO.php";
include_once "../Vacantes/vacantes.class.php";

$vacantesDAO = new VacantesDAO();
$vacantes = $vacantesDAO->listarVacantes();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vacantes</title>
    <link rel="stylesheet" type="text/css" href="../Usuarios/styles.css">
</head>
<body>
    <div class="container">
        <h1>Vacantes</h1>
        <a href="../Usuarios/logout.php" class="button">Logout</a>
        <ul>
            <?php foreach ($vacantes as $vacante): ?>
                <?php if ($vacante['estado'] == 1): ?>
                    <li class="vacante">
                        <h2><?php echo htmlspecialchars($vacante['tituloVacante']); ?></h2>
                        <p>Ubicación: <?php echo htmlspecialchars($vacante['ubicacionV']); ?></p>
                        <p>Salario: <?php echo htmlspecialchars($vacante['salarioV']); ?></p>
                        <p><?php echo htmlspecialchars($vacante['descVacante']); ?></p>
                        <p>Contacto: <?php echo htmlspecialchars($vacante['contacto']); ?></p>
                        <img src="<?php echo htmlspecialchars($vacante['imagen']); ?>" alt="Imagen de la vacante" width="100">
                        <a href="../Postulaciones/registrarPostulacion.php?idVacante=<?php echo htmlspecialchars($vacante['idVacante']); ?>" class="vacante-action">Postular</a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>