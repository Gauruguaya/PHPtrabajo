<?php
class VacantesDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost;dbname=ofertasempleo", "root", "");
    }

    public function crearVacante($tituloVacante, $ubicacionV, $salarioV, $descVacante, $fechaPublicacion, $contacto, $imagen, $estado, $usuarioId) {
        $sql = $this->conexao->prepare(
            "INSERT INTO vacante (tituloVacante, ubicacionV, salarioV, descVacante, fechaPublicacion, contacto, imagen, estado, usuarioId) VALUES
            (:tituloVacante, :ubicacionV, :salarioV, :descVacante, :fechaPublicacion, :contacto, :imagen, :estado, :usuarioId)"
        );
        $sql->bindValue(":tituloVacante", $tituloVacante);
        $sql->bindValue(":ubicacionV", $ubicacionV);
        $sql->bindValue(":salarioV", $salarioV);
        $sql->bindValue(":descVacante", $descVacante);
        $sql->bindValue(":fechaPublicacion", $fechaPublicacion);
        $sql->bindValue(":contacto", $contacto);
        $sql->bindValue(":imagen", $imagen);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":usuarioId", $usuarioId);
        return $sql->execute();
    }

    public function listarVacantes() {
        $sql = $this->conexao->prepare("SELECT * FROM vacante");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function desativarVacante($idVacante) {
        $sql = $this->conexao->prepare("UPDATE vacante SET estado = 0 WHERE idVacante = :idVacante");
        $sql->bindValue(":idVacante", $idVacante);
        return $sql->execute();
    }

    public function ativarVacante($idVacante) {
        $sql = $this->conexao->prepare("UPDATE vacante SET estado = 1 WHERE idVacante = :idVacante");
        $sql->bindValue(":idVacante", $idVacante);
        return $sql->execute();
    }

    public function listarCandidatos($idVacante) {
        $sql = $this->conexao->prepare("
            SELECT u.nombreUsuario, u.emailUsuario, u.fotoUsuario, u.linkedInUsuario
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