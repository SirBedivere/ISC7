<?php 

class  ProductoServicio{
	
	
	/**
	 * Insert
	 */
	public function insert($Producto) {
		$conexion=new conexion();
		$sql="insert into producto (CodigoBarras, Nombre, Descripcion, PrecioEntrada) Values ('".$Producto->CodigoBarras."','".$Producto->Nombre."','".$Producto->Descripcion."','".$Producto->PrecioEntrada."');";
		$resultado=$conexion->ejecutar($sql);
		return $resultado;
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
	
	public function crearObeto($resultado){
		$Producto = new Producto();
		$Producto->CodigoBarras=$resultado->CodigoBarras;
		$Producto->Nombre=$resultado->Nombre;
		$Producto->Descripcion=$resultado->Descripcion;
		$Producto->PrecioEntrada=$resultado->PrecioEntrada;

		$ProductoServicio = new ProductoServicio();
		$Producto->Producto=$ProductoServicio->findByID($resultado->idProducto);
		return $Producto; 
		
	}

}
?>