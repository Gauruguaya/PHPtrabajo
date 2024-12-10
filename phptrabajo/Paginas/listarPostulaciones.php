<?php
include_once "../Postulaciones/PostulacionesDAO.php";
include_once "../Usuarios/Usuario.php";

// Verificar que solo el administrador pueda acceder a esta página
session_start();
if (!isset($_SESSION['tipoUsuario']) || $_SESSION['tipoUsuario'] != 1) {
    header("Location: ../Usuarios/loginU.php");
    exit();
}

// Obtener el ID de la vacante desde la URL
if (!isset($_GET['idVacante'])) {
    echo "Error: idVacante no especificado.";
    exit();
}

$idVacante = $_GET['idVacante'];

// Crear una instancia de PostulacionesDAO
$postulacionesDAO = new PostulacionesDAO();

// Obtener la lista de postulaciones para la vacante
$postulaciones = $postulacionesDAO->listarPostulacionesPorVacante($idVacante);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Postulaciones</title>
    <link rel="stylesheet" type="text/css" href="../Usuarios/styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #f5f5f5;
        }
        .button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Postulaciones para la Vacante</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>LinkedIn</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($postulaciones as $postulacion): ?>
                <tr>
                    <td><?php echo htmlspecialchars($postulacion['usuarioId']); ?></td>
                    <td><?php echo htmlspecialchars($postulacion['nombreUsuario']); ?></td>
                    <td><?php echo htmlspecialchars($postulacion['emailUsuario']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($postulacion['fotoUsuario']); ?>" alt="Foto de <?php echo htmlspecialchars($postulacion['nombreUsuario']); ?>" width="100"/></td>
                    <td><a href="<?php echo htmlspecialchars($postulacion['linkedInUsuario']); ?>" target="_blank">Perfil de LinkedIn</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../Paginas/menuAdministrador.php" class="button">Volver al Menú</a>
        <a href="../Usuarios/logout.php" class="button">Cerrar Sesión</a>
    </div>
</body>
</html>