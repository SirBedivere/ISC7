<?php 
include("../Conexion/Conexion.php");
include("../Beans/Producto.php");

class Producto {
	public $tabla = "Producto";
	/**
	 * Insert
	 */
	public function insert($Producto) {

		// abrir conexión BD
		$conexion = new Conexion();

		//insertar 
		$sql = "INSERT INTO " . $this->tabla . " (codigo,nombre,descripcion,precio) VALUES '{$Producto->codigo}','{$Producto->nomrbe}','{$Producto->descripcion}','{$Producto->precio,}'";
		return $conexion->ejecutar($sql);
	}
	/**
	 * Find by ID
	 */
	public function findByID($id) {
		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$idProducto}";
		return $conexion->ejecutar($sql);
		}
	/**
	 * Find All
	 */
	public function findAll() {
		// abrir conexión BD
		$conexion = new Conexion();
		// generar SQL del DAO
		$sql = "SELECT * FROM " . $this->tabla;
		return $conexion->ejecutar($sql);
	
	}
	/**
	 * Delete
	 */
	public function delete($id) {
		// abrir conexión BD
		$conexion = new Conexion();
		// generar SQL del DAO
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$idProducto}";
		return $conexion->ejecutar($sql);

	}
	/**
	 * Actualizar
	 */
	public function update($Producto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql = "UPDATE " . $this->tabla . " SET estatus='{$Producto->estatus}', FechaCreacion='{$Producto->fechaCreacion}', usuario_id='{$Producto->usuario}' WHERE id={$Producto->idProducto}";
		return $conexion->ejecutar($sql);

	}
	
	private function crearObeto($resultado){
		$Producto = new Producto();
		$Producto->idProducto=$resultado->idProducto;
		$Producto->codigo=$resultado->codigo;
		$Producto->nombre=$resultado->nombre;
		$Producto->descripcion=$resultado->descripcion;
		$Producto->precio=$resultado->precio;
		
		$ProductoServicio = new ProductoServicio();
		$Producto->Producto=$ProductoServicio->findByID($resultado->idProducto);
		return $Producto; 
		
	}

}