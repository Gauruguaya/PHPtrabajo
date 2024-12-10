<?php
class Usuario{
	private $nombreUsuario;
	private $emailUsuario;
	private $fotoUsuario;
	private $linkedInUsuario;
	private $contrasenaUsuario;

	   // Constructor con parámetros opcionales
	   public function __construct($nombreUsuario = null, $emailUsuario = null, $fotoUsuario = null, $linkedInUsuario = null, $contrasenaUsuario = null) {
        $this->nombreUsuario = $nombreUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->fotoUsuario = $fotoUsuario;
        $this->linkedInUsuario = $linkedInUsuario;
        $this->contrasenaUsuario = $contrasenaUsuario;
    }

	public function getNombreUsuario(){
		return $this->nombreUsuario;
	}
	public function setNombreUsuario($value){
		$this->nombreUsuario=$value;
	}	
	public function getEmailUsuario(){
		return $this->emailUsuario;
	}
	public function setEmailUsuario($value){
		$this->emailUsuario=$value;
	}	
	public function getFotoUsuario(){
		return $this->fotoUsuario;
	}
	public function setFotoUsuario($value){
		$this->fotoUsuario=$value;
	}	
	public function getLinkedInUsuario(){
		return $this->linkedInUsuario;
	}
	public function setLinkedInUsuario($value){
		$this->linkedInUsuario=$value;
	}
	
	public function getContrasenaUsuario(){
		return $this->contrasenaUsuario;
	}
	public function setcontrasenaUsuario($value){
		$this->contrasenaUsuario=$value;
	}
}
?>