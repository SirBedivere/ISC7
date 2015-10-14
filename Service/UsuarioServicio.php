<?php 

class Usuario {

	public function insertar($objeto) {
		$conexion=new conexion();
		$sql="Insert into usuario (id, apellido, nombre, email, password, imagen) Values ('".$usuario->id."','".$usuario->apellido."','".$usuario->nombre."','".$usuario->email."','".$usuario->password."','".$usuario->imagen."');";
		$conexion->execute($sql);

	}

	public function actualizar($objeto) {
		$conexion=new conexion();
		$sql="Update into usuario (id, apellido, nombre, email, password, imagen) Values ('".$usuario->id."','".$usuario->apellido."','".$usuario->nombre."','".$usuario->email."','".$usuario->password."','".$usuario->imagen."');";
		mysqli_query($conexion->obtener(), $sql);
		return mysqli_fetch_object($consulta);

	}

		public function elminar($id) {
		$conexion = new conexion();
		$sql="* DELET * FROM usuario WHERE idUsuario="+$id+";";
		$sql = $dao->delete($id);
		mysqli_query($conexion->obtener(), $sql);
		return mysqli_fetch_object($consulta);

	}

	public function obtener_por_ID($id) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$id+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return mysqli_fetch_object($consulta);
	}

	public function obtener_todos() {

		$conexion = new conexion();
		$sql="* SELECT * FROM";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$resultados = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultados[] = $row;
		}

		public function obtener_por_nombre($nombre) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$nombre+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return mysqli_fetch_object($consulta);
	}

		return $resultados;	

	}

}