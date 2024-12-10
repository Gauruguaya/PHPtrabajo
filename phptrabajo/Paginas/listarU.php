<?php
	include_once "../Usuarios/Usuario.php";
	include_once "../Usuarios/usuariosDAO.class.php";
	
	$objUsuariosDAO = new usuariosDAO();
	$retorno =$objUsuariosDAO->listarU();
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lista de Usuarios</title>
	</head>
	<body>
		<h1>Lista de Usuarios</h1>
		<table border>
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Foto</th>
                <th>LinkedIn</th>
				<th>Tipo</th>
				<th>Estado</th>
				<th colspan="2">Acciones</th>
			</thead>
			<tbody>
			<?php
			foreach($retorno as $linha){
				echo "
				 <tr>
                <td>" . htmlspecialchars($linha['usuarioId']) . "</td>
                <td>" . htmlspecialchars($linha['nombreUsuario']) . "</td>
                <td>" . htmlspecialchars($linha['emailUsuario']) . "</td>
                <td><img src='imagens/" . htmlspecialchars($linha['fotoUsuario']) . "' width='100'/></td>
                <td>" . htmlspecialchars($linha['linkedInUsuario']) . "</td>
                <td>" . htmlspecialchars($linha['tipoUsuario']) . "</td>
                <td>" . htmlspecialchars($linha['estadoUsuario']) . "</td>
                <td><a href='editar.php?id=" . htmlspecialchars($linha['usuarioId']) . "'>Editar</a></td>
                <td><a href='excluir.php?id=" . htmlspecialchars($linha['usuarioId']) . "'>Excluir</a></td>
            </tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>