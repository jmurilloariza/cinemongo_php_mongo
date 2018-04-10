<?php 

/**
* 
*/
class CopiaDTO {
	
	private id;
	private n_copias;
	private deteriorada;
	private formato;
	private id_pelicula;
	private precio;

	function __construct($id, $n_copias, $deteriorada, $formato, $id_pelicula, $precio){
		$this->id = $id;
		$this->n_copias = $n_copias;
		$this->deteriorada = $deteriorada;
		$this->formato = $formato;
		$this->id_pelicula = $id_pelicula;
		$this->precio = $precio;
	}

	public function getId(){
		return $this->id;
	}

	public function getN_copias(){
		return $this->n_copias;
	}

	public function getDeteriorada(){
		return $this->deteriorada;
	}

	public function getFormato(){
		return $this->formato;
	}

	public function getId_pelicula(){
		return $this->id_pelicula;
	}

	public function getPrecio(){
		return $this->precio;
	}

}

?>