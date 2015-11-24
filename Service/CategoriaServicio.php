<?php

class CategoriaServicio{
	
	
	
	public function insert($Categoria) {

		$conexion=new conexion();
		$sql="insert into categoria (Nombre, Descripcion, FechaCreacion) Values ('".$Categoria->Nombre."','".$Categoria->Descripcion."','".$Categoria->FechaCreacion."');";
		$resultado=$conexion->ejecutar($sql);
		return $resultado;
	}



	
	public function findByID($id) {

		$conexion = new Conexion();

		$sql = "SELECT * FROM " . $this->tabla . " WHERE id={$id_categoria}";
		$sql = $dao->findByID($id);
		return $conexion->ejecutar($sql);

	}



	public function findAll() {		
		$conexion = new Conexion();		
		$sql = "SELECT * FROM  categoria";
		$x=0;
		$categoriaTabla=$conexion->ejecutarConsulta($sql);	
		
		while($categoriaTabla = mysqli_fetch_object($categoriaTabla)){
			$categoria[$x]=$this->crearObeto($categoriaTabla);
			$x++;
		}
		return $categoria;
	
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
	public function crearObeto($resultado){
		$Categoria = new Categoria();
		$Categoria->Id=$resultado->Id;
		$Categoria->Nombre=$resultado->Nombre;
		$Categoria->Descripcion=$resultado->Descripcion;
		$Categoria->FechaCreacion=$resultado->FechaCreacion;
		return $resultado; 
		
	}

}
?>