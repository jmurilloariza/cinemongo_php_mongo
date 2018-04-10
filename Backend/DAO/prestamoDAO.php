<?php 

/**
* 
*/
class PrestamoDAO {
	
	private $client;
	private $collection; 

	function __construct(){
		$this->client = (new Mongo())->getClient();
		//var_dump($this->client);
		$this->collection = $this->client->Cinema->Prestamo;
		//var_dump($this->collection);
	}

	public function registrarPrestamo($dto){
		try {
			$result = $this->collection->insertOne([
				"id_prestamo" => $dto->getId_prestamo(),
				"codigo_cliente"=> $dto->getCodigo_cliente(),
				"fecha_prestamo" => $dto->getFecha_prestamo(),
				"fecha_tope"=> $dto->getFecha_tope(),
				"fecha_entrega"=> $dto->getFecha_entrega(),
				"n_copias"=> $dto->getN_copias()
			]);

			if($result->getInsertedCount()>0){
				return array("sussess" => "0", "message" => "Prestamo Registrado");
			}else{
				return array("sussess" => "0", "message" => "Falló el registro");
			}
		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "0", "message" => "Error en el registro");
			}
		}
	}

	public function consultarPrestamos(){
		try {
			$array = array();
			$result = $this->collection->find([], ['projection' => ['_id' => 0]]);
			foreach ($result as $prestamo) {
				array_unshift($array, $prestamo);
			}
			return $array;

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

	public function obtenerPrestamo($cliente, $fecha){

	}


}

?>