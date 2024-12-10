<?php
class PostulacionesDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost;dbname=ofertasempleo", "root", "");
    }

    public function registrarPostulacion($usuarioId, $idVacante) {
        $sql = $this->conexao->prepare("INSERT INTO postulacion (usuarioId, idVacante) VALUES (:usuarioId, :idVacante)");
        $sql->bindValue(":usuarioId", $usuarioId);
        $sql->bindValue(":idVacante", $idVacante);
        return $sql->execute();
    }
//Administrador visualiza los candidatos para cada vacante, 
//listando nombre, email, foto y linkedin.
    public function listarPostulacionesPorVacante($idVacante) {
        $sql = $this->conexao->prepare("
            SELECT u.usuarioId, u.nombreUsuario, u.emailUsuario, u.fotoUsuario, u.linkedInUsuario 
            FROM postulacion p
            JOIN usuario u ON p.usuarioId = u.usuarioId
            WHERE p.idVacante = :idVacante
        ");
        $sql->bindValue(":idVacante", $idVacante);
        $sql->execute();
        return $sql->fetchAll();
    }
}
?>