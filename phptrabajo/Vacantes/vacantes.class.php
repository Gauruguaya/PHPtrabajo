<?php
class Vacantes {
    private $idVacante;
    private $tituloVacante;
    private $ubicacionV;
    private $salarioV;
    private $descVacante;
    private $fechaPublicacion;
    private $contacto;
    private $imagen;
    private $estado;
    private $usuarioId;
    private $vacantesDAO;

    public function __construct() {
        $this->vacantesDAO = new VacantesDAO();
    }

    public function crearVacante($tituloVacante, $ubicacionV, $salarioV, $descVacante, $fechaPublicacion, $contacto, $imagen, $estado, $usuarioId) {
        $this->tituloVacante = $tituloVacante;
        $this->ubicacionV = $ubicacionV;
        $this->salarioV = $salarioV;
        $this->descVacante = $descVacante;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->contacto = $contacto;
        $this->imagen = $imagen;
        $this->estado = $estado;
        $this->usuarioId = $usuarioId;
        return $this->vacantesDAO->crearVacante($this->tituloVacante, $this->ubicacionV, $this->salarioV, $this->descVacante, $this->fechaPublicacion, $this->contacto, $this->imagen, $this->estado, $this->usuarioId);
    }

    public function listarVacantes() {
        return $this->vacantesDAO->listarVacantes();
    }

    public function desativarVacante($idVacante) {
        $this->idVacante = $idVacante;
        return $this->vacantesDAO->desativarVacante($this->idVacante);
    }

    public function listarCandidatos($idVacante) {
        return $this->vacantesDAO->listarCandidatos($idVacante);
    }
}
?>