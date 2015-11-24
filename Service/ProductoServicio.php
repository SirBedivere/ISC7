<?php 

class  ProductoServicio{
	
	
	/**
	 * Insert
	 */
	public function insert($Producto) {
		$conexion=new conexion();
		$sql="insert into producto (Nombre, Descripcion, InventarioMin, PrecioEntrada, PrecioSalida, Unidades, FechaCreacion ) Values ('".$Producto->Nombre."','".$Producto->Descripcion."','".$Producto->InventarioMin."','".$Producto->PrecioEntrada."','".$Producto->PrecioSalida."','".$Producto->Unidades."','".$Producto->FechaCreacion."');";
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
		$conexion = new Conexion();
		$sql = "SELECT * FROM  Producto";
		$x=0;
		$productosTabla=$conexion->ejecutarConsulta($sql);
		
		while($productoTabla = mysqli_fetch_object($productosTabla)){
			$productos[$x]=$this->crearObeto($productoTabla);
			$x++;
		}
		return $productos;
	
	}
	
	public function findByCategoria($idCategoria) {
		// abrir conexión BD
		$conexion = new Conexion();
		// generar SQL del DAO
		$sql = "SELECT * FROM  Producto WHERE CategoriaId=".$idCategoria.";";
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
		
		$Producto->Imagen=$resultado->Imagen;
		$Producto->Nombre=$resultado->Nombre;
		$Producto->Descripcion=$resultado->Descripcion;
		$Producto->PrecioEntrada=$resultado->PrecioEntrada;
		$Producto->PrecioSalida=$resultado->PrecioSalida;
		$Producto->Categoria=$resultado->CategoriaId;
		$Producto->InventarioMinimo=$resultado->InventarioMin;
		$Producto->Activo=$resultado->EsActivo;
		

		return $Producto; 
		header ("Location: http://localhost/ISC7/views/altaProducto.php");
		die();
		
	}

}
?>