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
		$this->conexion = mysqli_connect("localhost", "root", "", "paginaventas");

		mysqli_set_charset($this->conexion, "utf8");
		mysqli_query($this->conexion, "SET NAMES 'UTF8'");
	}


	/**
	 * Obtener conexión
	 */
	public function obtener() {
		if($this->conexion) {
			return $this->conexion;
		}
	}
	
	public function ejecutar($sql){
		$resultado = mysqli_query($this->obtener(),$sql);
		$this->cerrar();
		return mysqli_fetch_object($resultado);
	}
	
	public function ejecutarConsulta($sql){
		$resultado = mysqli_query($this->obtener(),$sql);
		$this->cerrar();
		return $resultado;
	}


	/**
	 * Cerrar conexión a BD
	 */
	public function cerrar() {

		if($this->conexion) {
			mysqli_close($this->conexion);
		}

	}

}

?>