<?php 

/**
* 
*/
class router {
	
	private $controller;

	function __construct(){
		$this->controller = new Controller();
	}

	public function router(){
		if(isset($_POST['mode'])){
			if($_POST['mode']=="registrarCliente"){
				$cedula = $_POST['dni_txt'];
                $nombre = $_POST['nombre_txt'];
                $apellido1 = $_POST['apellido1_txt'];
                $apellido2 = $_POST['apellido2_txt'];
                $direccion = $_POST['direccion_txt'];
                $correo = $_POST['correo_txt'];

                $this->controller->registrarCliente($cedula, $nombre, $apellido1, $apellido2, $direccion, $correo);	
			}else if($_POST['mode']=="registrarPelicula"){
				$id = uniqid('', true);
				$titulo = $_POST['titulo_txt'];
				$ano = $_POST['ano_txt'];
				$critica = $_POST['critica_txt'];
				$caratula = './images/'.$_POST['caratula_txt'];
				$id_copia = uniqid('', true);
				$copias = array();

				for ($i=1; $i < ((sizeof($_POST)-1)/4); $i++) { 
					array_unshift($copias, [
						"id_copia" => $id_copia, 
						"id_pelicula" => $id, 
						"n_copias" => $_POST['n_copias_txt'.$i], 
						"deteriorada" => $_POST['deteriorada_txt'.$i], 
						"formato" => $_POST['formato_txt'.$i], 
						"precio" => $_POST['precio_txt'.$i]]);
				}
				//var_dump($copias);
				$this->controller->registrarPeliculas($id, $titulo, $ano, $critica, $caratula, $copias);
			}else if($_POST['mode']=="registrarPrestamo"){
				$id_prestamo = uniqid('', true);
				$id_copia = $_POST['id_copia'];
				$fecha_prestamo = date('j/m/Y');
				$fecha_tope = $_POST['fecha_tope_txt'];
				$fecha_entrega = $_POST['fecha_entrega_txt'];
				$codigo_cliente = $_POST['cliente_txt'];
				$n_copias = $_POST['cantidad_txt'];
				$this->controller->registrarPrestamo($id_prestamo, $id_copia, $fecha_prestamo, $fecha_tope, $fecha_entrega, $codigo_cliente, $n_copias);
			}
		}else {
			if(isset($_GET['mode'])){
				if($_GET['mode'] == "consultarClientes"){
					$this->controller->consultarClientes();
				}else if($_GET['mode'] == "consultarPeliculas"){
					$this->controller->consultarPeliculasSinCopias();
				}else if($_GET['mode'] == "consultarCopias"){
					$this->controller->consultarCopias($_GET['titulo']);
				}else if($_GET['mode'] == "consultarDatosPeliculas"){
					$this->controller->consultarPeliculas();
				}else if($_GET['mode'] == "consultarDatosPrestamos"){
					$this->controller->consultarPrestamos();
				}else if($_GET['mode'] == "consultarDatosClientes"){
					$this->controller->consultarDatosClientes();
				}
			}
		}

	}
}

?>