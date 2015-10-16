<?php 
include("../Conexion/Conexion.php");
include("../Beans/Usuario.php");

class Usuario {

	public function insert($objeto) {
		$conexion=new conexion();
		$sql="Insert into usuario (id, apellido, nombre, email, password, imagen) Values ('".$usuario->id."','".$usuario->apellido."','".$usuario->nombre."','".$usuario->email."','".$usuario->password."','".$usuario->imagen."');";
		return this->crearObjeto($conexion->ejecutar($sql));

	}

	public function actualizar($objeto) {
		$conexion=new conexion();
		$sql="Update into usuario (id, apellido, nombre, email, password, imagen) Values ('".$usuario->id."','".$usuario->apellido."','".$usuario->nombre."','".$usuario->email."','".$usuario->password."','".$usuario->imagen."');";
		return this->crearObjeto($conexion->ejecutar($sql));

	}

		public function elminar($id) {
		$conexion = new conexion();
		$sql="* DELET * FROM usuario WHERE idUsuario="+$id+";";
		$sql = $dao->delete($id);
		return this->crearObjeto($conexion->ejecutar($sql));

	}

	public function obtenerPorID($id) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$id+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return this->crearObjeto($conexion->ejecutar($sql));
	}

	public function obtenerTodos() {

		$conexion = new conexion();
		$sql="* SELECT * FROM";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$resultados = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultados[] = this->crearObjeto($row);
		}

	public function obtenerPorNombre($nombre) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$nombre+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return this->crearObjeto($conexion->ejecutar($sql));
	}

	private function crearObjeto($resultado){
		$usuario = new Usuario();
		$usuario->idUsuario=$resultado->idUsuario;
		$usuario->apellido=$resultado->apellido;
		$usuario->nombre=$resultado->nombre;
		$usuario->email=$resultado->email;
		$usuario->imagen=$resultado->imagen;
		return $usuario;	

	}

}