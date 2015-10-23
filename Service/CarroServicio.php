<?php
include("../Conexion/Conexion.php");
include("../Beans/Carro.php");
include("ProductoServicio.php");
include("UsuarioServicio.php");

class carro {

	public $tabla = "carro";

	public function insert($carro) {
		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (fechaCreacion,estatus,listaProductos,idUsuario) VALUES ('{$carro->fechaCreacion}','{$carro->estatus}','{$carro->listaProductos}','{$carro->idUsuario}')";
		return $conexion->ejecutar($sql);
	}

	public function update($carro) {
		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET fechaCreacion='{$carro->fechaCreacion}', estatus='{$carro->estatus}' listaProductos='{$carro->listaProductos}', idUsuario='{$carro->listaProductos}', WHERE id_carro={$carro->id_carro}";
		return $conexion->ejecutar($sql);
	}

	public function delete($id_carro) {
		$conexion = new Conexion();
		$sql = "DELETE FROM " . $this->tabla . " WHERE id_carro={$id_carro}";
		return $conexion->ejecutar($sql);
	}

	public function findByID($id_carro) {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla . " WHERE id_operacion={$id_operacion}";
		return this->crearObjeto($conexion->ejecutar($sql));
	}

	public function findAll() {
		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla;
		return $conexion->ejecutar($sql);
	}
	
	private function crearObjeto($resultado){
		$carrito = new Carro();
		$carrito->id_carro=$resultado->id_carro;
		$carrito->fechaCreacion=$resultado->fechaCreacion;
		$carrito->estatus=$resultado->estatus;
		$usuarioServicio=new UsuarioServicio();
		$carrito->usuario= $usuarioServicio->buscarPorID($resultado->idUsuario);
		
		
		
		$carrito->listaProductos=
		$productos=$this->findbyIdCarrito($carrito->id_carro);
		while($productos){
			
		}
		return carrito;
	}
	
	//insertar carritoproducto
	//eliminar carritoproducto
	//findbyIdCarrito carritoProducto

}
?>