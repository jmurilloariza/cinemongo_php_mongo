<?php 

/**
* 
*/
class PrestamoDTO {

	private $id_prestamo;
	private $fecha_prestamo;
	private $fecha_tope;
	private $fecha_entrega;
	private $codigo_cliente;
	private $n_copias;
	private $id_copia;
	
	function __construct($id_prestamo, $id_copia, $fecha_prestamo, $fecha_tope, $fecha_entrega, $codigo_cliente, $n_copias){
		$this->id_prestamo = $id_prestamo;
		$this->id_copia = $id_copia;
		$this->fecha_prestamo = $fecha_prestamo;
		$this->fecha_tope = $fecha_tope;
		$this->fecha_entrega = $fecha_entrega;
		$this->codigo_cliente = $codigo_cliente;
		$this->n_copias = $n_copias;
	}

	

    /**
     * @return mixed
     */
    public function getIdPrestamo()
    {
        return $this->id_prestamo;
    }

    /**
     * @param mixed $id_prestamo
     *
     * @return self
     */
    public function setIdPrestamo($id_prestamo)
    {
        $this->id_prestamo = $id_prestamo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaPrestamo()
    {
        return $this->fecha_prestamo;
    }

    /**
     * @param mixed $fecha_prestamo
     *
     * @return self
     */
    public function setFechaPrestamo($fecha_prestamo)
    {
        $this->fecha_prestamo = $fecha_prestamo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaTope()
    {
        return $this->fecha_tope;
    }

    /**
     * @param mixed $fecha_tope
     *
     * @return self
     */
    public function setFechaTope($fecha_tope)
    {
        $this->fecha_tope = $fecha_tope;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaEntrega()
    {
        return $this->fecha_entrega;
    }

    /**
     * @param mixed $fecha_entrega
     *
     * @return self
     */
    public function setFechaEntrega($fecha_entrega)
    {
        $this->fecha_entrega = $fecha_entrega;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    /**
     * @param mixed $codigo_cliente
     *
     * @return self
     */
    public function setCodigoCliente($codigo_cliente)
    {
        $this->codigo_cliente = $codigo_cliente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNCopias()
    {
        return $this->n_copias;
    }

    /**
     * @param mixed $n_copias
     *
     * @return self
     */
    public function setNCopias($n_copias)
    {
        $this->n_copias = $n_copias;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCopia()
    {
        return $this->id_copia;
    }

    /**
     * @param mixed $id_copia
     *
     * @return self
     */
    public function setIdCopia($id_copia)
    {
        $this->id_copia = $id_copia;

        return $this;
    }
}

?>