<?php 

/**
* 
*/
class ClienteDTO {
	
	private $cedula;
	private $nombre;
	private $apellido1;
	private $apellido2;
	private $direccion;
	private $correo;

	function __construct($cedula, $nombre, $apellido1, $apellido2, $direccion, $correo){
		$this->cedula = $cedula;
		$this->nombre = $nombre;
		$this->apellido1 = $apellido1;
		$this->apellido2 = $apellido2;
		$this->direccion = $direccion;
		$this->correo = $correo;
	}

	public function getCedula(){
		return $this->cedula; 
	}

	public function getnombre(){
		return $this->nombre; 
	}

	public function getApellido1(){
		return $this->apellido1; 
	}

	public function getApellido2(){
		return $this->apellido2; 
	}

	public function getDireccion(){
		return $this->direccion; 
	}

	public function getCorreo(){
		return $this->correo; 
	}
}

?>