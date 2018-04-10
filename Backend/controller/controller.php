<?php 

include_once '/../DAO/clienteDAO.php';
include_once '/../DAO/peliculaDAO.php';
include_once '/../DAO/prestamoDAO.php';

include_once '/../DTO/clienteDTO.php';
include_once '/../DTO/peliculaDTO.php';
include_once '/../DTO/prestamoDTO.php';


/**
* 
*/
class Controller {
	
	function __construct(){
		
	}

	public function registrarCliente($cedula, $nombre, $apellido1, $apellido2, $direccion, $correo){
		$dto = new ClienteDTO($cedula, $nombre, $apellido1, $apellido2, $direccion, $correo);
		$dao = new ClienteDAO();
		echo json_encode($dao->insert($dto));
	}

	public function registrarPeliculas($id, $titulo, $ano, $critica, $caratula, $datosCopias){
		$dto = new PeliculaDTO($id, $titulo, $ano, $critica, $caratula);
		$dao = new PeliculaDAO();
		echo json_encode($dao->createPelicula($dto, $datosCopias));
	}

	public function consultarClientes(){
		$dao = new ClienteDAO();
		echo json_encode($dao->listarClientes());
	}

	public function consultarPeliculasSinCopias(){
		$dao = new PeliculaDAO();
		echo json_encode($dao->consultarPeliculasSinCopias());
	}

	public function consultarCopias($titulo){
		$dao = new PeliculaDAO();
		echo json_encode($dao->consultarCopias($titulo));
	}

	public function registrarPrestamo($id_prestamo, $id_copia, $fecha_prestamo, $fecha_tope, $fecha_entrega, $codigo_cliente, $n_copias){
		$dto = new PrestamoDTO($id_prestamo, $id_copia, $fecha_prestamo, $fecha_tope, $fecha_entrega, $codigo_cliente, $n_copias);
		$dao = new PrestamoDAO();
		echo json_encode($dao->registrarPrestamo($dto));
	}

	public function consultarPeliculas(){
		$dao = new PeliculaDAO();
		echo json_encode($dao->consultarPeliculas());
	}

	public function consultarPrestamos(){
		$dao = new PrestamoDAO();
		echo json_encode($dao->consultarPrestamos());
	}

	public function consultarDatosClientes(){
		$dao = new ClienteDAO();
		echo json_encode($dao->consultarCliente());
	}

}

?>