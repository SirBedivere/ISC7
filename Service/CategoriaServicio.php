<?php
include("../Conexion/Conexion.php");
include("../Beans/Categoria.php");

class Categoria{

	public function insert($categoria) {

		$conexion = new Conexion();
		$sql = "INSERT INTO " . $this->tabla . " (idCategoria, estatus, fechaCreacion, nombreCategoria, descripcionCategoria, creadoCategoria) VALUES ('{$objeto->idCategoria}','{$objeto->estatus}','{$objeto->fechaCreacion}','{$objeto->nombreCategoria}','{$objeto->descripcionCategoria}','{$objeto->fechaCreacion}','{$objeto->creadoCategoria}')";
		return $conexion->ejecutar($sql);
	}



	
	public function findByID($id) {

		$conexion = new Conexion();

		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id_categoria}";
		$sql = $dao->findByID($id);
		return $conexion->ejecutar($sql);

	}



	public function findAll() {

		$conexion = new Conexion();
		$sql = "SELECT * FROM " . $this->tabla;
		$sql = $dao->findAll($id);
		return $conexion->ejecutar($sql);

	}



	public function delete($id) {

		$conexion = new Conexion();
		$sql = "DELETE FROM " . $this->tabla . " WHERE id={$id_categoria}";
		$sql = $dao->delete($id);
		return $conexion->ejecutar($sql);

	}



	public function update($objeto) {

		$conexion = new Conexion();
		$sql = "UPDATE " . $this->tabla . " SET usuario='{$objeto->id_categoria}', password='{$objeto->estatus}', direccion='{$objeto->fecha_creacion}' WHERE id={$objeto->id_categoria}";
		$sql = $dao->update($objeto);
		return $conexion->ejecutar($sql);

	}

}
?>