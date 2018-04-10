<?php 

/**
* 
*/
class PeliculaDTO {
	
	private $titulo;
	private $ano;
	private $critica;
	private $caratula;
	private $id;

	function __construct($id, $titulo, $ano, $critica, $caratula){
		$this->id = $id;
		$this->titulo = $titulo;
		$this->ano = $ano;
		$this->critica = $critica;
		$this->caratula = $caratula;
	}

	public function getId(){
		return $this->id;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function getCritica(){
		return $this->critica;
	}

	public function getAno(){
		return $this->ano;
	}

	public function getCaratula(){
		return $this->caratula;
	}
}

?>