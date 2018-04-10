<?php 

/**
* 
*/
class ClienteDAO{

	private $client;
	private $collection; 

	function __construct(){
		$this->client = (new Mongo())->getClient();
		$this->collection = $this->client->Cinema->clientes;
	}

	public function insert($dto){
		$array = array();
		try {
			$result = $this->collection->insertOne([
				"dni" => $dto->getCedula(),
				"nombre"=> $dto->getNombre(),
				"apellido1"=> $dto->getApellido1(),
				"apellido2"=> $dto->getApellido2(),
				"direccion"=> $dto->getDireccion(),
				"email"=> $dto->getCorreo()
			]);
			if($result->getInsertedCount()>0){
				return array("sussess" => "0", "message" => "Cliente Registrado");
			}else{
				return array("sussess" => "1", "message" => "Error");
			}
		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

	public function listarClientes(){
		$array = array();
		try {
			$array = array();
			$result = $this->collection->find([], ['projection' => ['dni' => 1, '_id' => 0, 'nombre' => 1, 'apellido1' => 1]]);
			foreach ($result as $cliente) {
				array_unshift($array, $cliente);
			}
			return $array;

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

	public function consultarCliente(){
		$array = array();
		try {
			$array = array();
			$result = $this->collection->find([], ['projection' => ['_id' => 0]]);
			foreach ($result as $cliente) {
				array_unshift($array, $cliente);
			}
			return $array;

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

}

 ?>