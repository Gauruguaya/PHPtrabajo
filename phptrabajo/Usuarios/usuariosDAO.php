<?php
	include_once "Usuario.php";
	class usuariosDAO{
		private $conexao;
		public function __construct(){
			$this->conexao = new PDO(
				"mysql:host=localhost; dbname=ofertasempleo",
				"root", ""
			);
		}
		public function inserir(Usuario $usuario){
			$sql = $this->conexao->prepare(
				"INSERT INTO usuario (nombreUsuario, emailUsuario, fotoUsuario, linkedInUsuario, tipoUsuario, estadoUsuario, contrasenaUsuario) VALUES
                (:nombreUsuario, :emailUsuario, :fotoUsuario, :linkedInUsuario, :tipoUsuario, :estadoUsuario, :contrasenaUsuario)"
			); 
			$sql->bindValue(":nombreUsuario", $usuario->getNombreUsuario());
			$sql->bindValue(":emailUsuario", $usuario->getEmailUsuario());
			$sql->bindValue(":fotoUsuario", $usuario->getFotoUsuario());
			$sql->bindValue(":linkedInUsuario", $usuario->getLinkedInUsuario());
			$sql->bindValue(":tipoUsuario", 0); // Usuario regular por defecto
			$sql->bindValue(":estadoUsuario", 1); // Usuario activo por defecto
		    $sql->bindValue(":contrasenaUsuario", $usuario->getContrasenaUsuario());
			$sql->execute();
			return $this->conexao->lastInsertId();
		}
		
		public function login(Usuario $usuario) {
			$sql = $this->conexao->prepare("SELECT * FROM usuario WHERE emailUsuario = :emailUsuario");
			$sql->bindValue(":emailUsuario", $usuario->getEmailUsuario());
			$sql->execute();
			if ($sql->rowCount() > 0) {
				$retorno = $sql->fetch();
				if ($retorno["contrasenaUsuario"] == $usuario->getContrasenaUsuario()) {
					return $retorno;
				} else {
					return 1; // Error de contraseña
				}
			} else {
				return 0; // Email no registrado
			}
		}
		public function listarU() {
			$sql = $this->conexao->prepare("SELECT * FROM usuario");
			$sql->execute();
			return $sql->fetchAll();
		}
	}
?>