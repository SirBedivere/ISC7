<?php 

class  ProductoServicio{
	
	
	/**
	 * Insert
	 */
	public function insert($Producto) {
		$conexion=new conexion();
		$sql="insert into producto (CodigoBarras, Imagen, Nombre, Descripcion, PrecioEntrada, PrecioSalida, CategoriaId, InventarioMin, EsActivo) Values ('".$Producto->CodigoBarras."',".$Producto->Imagen.",'".$Producto->Nombre."','".$Producto->Descripcion."','".$Producto->PrecioEntrada.",".$Producto->PrecioSalida.",".$Producto->CategoriaId.",".$Producto->InventarioMin.",".$Producto->EsActivo."');";
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
		$sql = "SELECT * FROM  Producto";
		//$productos[];
		$x=0;
		$productosTabla=$conexion->ejecutarConsulta($sql);
		
		while($productoTabla = mysqli_fetch_object($productosTabla)){
			$productos[$x]=$this->crearObeto($productoTabla);
			$x++;
		}
		return $productos;
	
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
		$Producto->Id=$resultado->Id;
		$Producto->CodigoBarras=$resultado->CodigoBarras;
		$Producto->Imagen=$resultado->Imagen;
		$Producto->Nombre=$resultado->Nombre;
		$Producto->Descripcion=$resultado->Descripcion;
		$Producto->PrecioEntrada=$resultado->PrecioEntrada;
		$Producto->PrecioSalida=$resultado->PrecioSalida;
		$Producto->Categoria=$resultado->CategoriaId;
		$Producto->InventarioMinimo=$resultado->InventarioMin;
		$Producto->Activo=$resultado->EsActivo;
		//$ProductoServicio = new ProductoServicio();
		//$Producto->Producto=$ProductoServicio->findByID($resultado->idProducto);
		return $Producto; 
		
	}

}
?>