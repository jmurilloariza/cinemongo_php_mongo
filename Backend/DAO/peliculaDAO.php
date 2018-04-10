<?php 

/**
* 
*/
class PeliculaDAO {
	
	private $client;
	private $collection; 

	function __construct(){
		$this->client = (new Mongo())->getClient();
		//var_dump($this->client);
		$this->collection = $this->client->Cinema->Peliculas;
		//var_dump($this->collection);
	}

	public function insert($copias, $id){
		try {
			//var_dump($copias);
			$result = $this->collection->updateOne(['_id' => $id], ['$set' => ['copias' => json_encode($copias)]]);
			//echo json_encode($result);
			if($result->getModifiedCount()>0){
				return array("sussess" => "0", "message" => "Pelicula Registrada");
			}else{
				return array("sussess" => "0", "message" => "Error en el registro");
			}
		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "0", "message" => "Error en el registro");
			}
		}
	}

	public function createPelicula($dto, $copias){
		try {
			$result = $this->collection->insertOne([
				"id" => $dto->getId(),
				"titulo" => $dto->getTitulo(),
				"ano"=> $dto->getAno(),
				"critica"=> $dto->getCritica(),
				"caratula"=> $dto->getCaratula(),
				"copias"=> $copias
			]);

			if($result->getInsertedCount()>0){
				return array("sussess" => "0", "message" => "Pelicula Registrada");
			}else{
				return array("sussess" => "0", "message" => "Error en el registro");
			}
		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "0", "message" => "Error en el registro");
			}
		}
	}

	public function consultarPeliculasSinCopias(){
		try {
			$array = array();
			$result = $this->collection->find([], ['projection' => ['titulo' => 1, '_id' => 0]]);
			foreach ($result as $pelicula) {
				array_unshift($array, $pelicula);
			}
			return $array;

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

	public function consultarCopias($titulo){
		try {
			$array = array();
			$result = $this->collection->find(["titulo" => $titulo], ['projection' => ['copias' => 1, '_id' => 0]]);
			foreach ($result as $pelicula) {
				foreach ($pelicula as $key) {
					array_unshift($array, $key);
				}
			}
			return $array[0];

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}	
	}

	public function consultarPeliculas(){
		try {
			$array = array();
			$result = $this->collection->find([], ['projection' => ['copias' => 0, '_id' => 0]]);
			foreach ($result as $pelicula) {
				array_unshift($array, $pelicula);
			}
			return $array;

		} catch (Exception $e) {
			if(strpos($e->getMessage(), "duplicate key")){
				return array("sussess" => "1", "message" => "Usuario ya se esta registrado");
			}
		}
	}

	public function getN_copias($id){
		try {
			$array = array();
			$result = $this->collection->find(['copias.id_copia' => $id]);
			foreach ($result as $copias) {
				array_unshift($array, $copias);
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