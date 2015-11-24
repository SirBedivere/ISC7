 <?php 

class UsuarioServicio {

	public function insert($Usuario) {
		
		$conexion=new conexion();
		$sql="insert into usuario (Nombre, Apellido, Correo, Contrasena) Values ('".$Usuario->Nombre."','".$Usuario->Apellido."','".$Usuario->Correo."','".$Usuario->Contrasena."');";
		$resultado=$conexion->ejecutar($sql);
		return $resultado;

	}

	public function actualizar($usuario) {
		$conexion=new conexion();
		$sql="Update into usuario (id, apellido, nombre, email, password, imagen) Values ('".$usuario->id."','".$usuario->apellido."','".$usuario->nombre."','".$usuario->email."','".$usuario->password."','".$usuario->imagen."');";
		return crearObjeto($conexion->ejecutar($sql));

	}

		public function elminar($id) {
		$conexion = new conexion();
		$sql="* DELET * FROM usuario WHERE idUsuario="+$id+";";
		$sql = $dao->delete($id);
		return crearObjeto($conexion->ejecutar($sql));

	}

	public function obtenerPorID($id) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$id+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return crearObjeto($conexion->ejecutar($sql));
	}

	public function obtenerTodos() {

		$conexion = new conexion();
		$sql="* SELECT * FROM";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		$resultados = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultados[] = crearObjeto($row);
		}
	}

	public function obtenerPorNombre($nombre) {
		$conexion = new conexion();
		$sql="* SELECT * FROM usuario WHERE idUsuario="+$nombre+";";
		$consulta = mysqli_query($conexion->obtener(), $sql);
		return crearObjeto($conexion->ejecutar($sql));
	}

	private function crearObjeto($resultado){
		$usuario = new Usuario();
		$Usuario->Id=$resultado->Id;
		$Usuario->Nombre=$resultado->Nombre;
		$Usuario->Apellido=$resultado->Apellido;
		$Usuario->Correo=$resultado->Correo;
		$Usuario->Contraseña=$resultado->Contraseña;
		return $usuario;	

	}

}