<?php 

/**
 * Establecer conexión con el servidor de BD
 */

class Conexion {

	public $conexion = false;

	/**
	 * Iniciar una conexión a BD
	 */
	public function __construct() {
		$this->conexion = mysqli_connect("localhost", "root", "root", "zapateria");

		mysqli_set_charset($this->conexion, "utf8");
		mysqli_query($this->conexion, "SET NAMES 'UTF8'");
	}


	/**
	 * Obtener conexión
	 */
	private function obtener() {
		if($this->conexion) {
			return $this->conexion;
		}
	}
	
	public function ejecutar($sql){
		$result = mysqli_execute(this->obtener(),$sql);
		this->cerrar();
		return mysqli_fetch_object($consulta);
	}


	/**
	 * Cerrar conexión a BD
	 */
	private function cerrar() {

		if($this->conexion) {
			mysqli_close($this->conexion);
		}

	}

}

?>