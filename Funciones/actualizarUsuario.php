<?php
include("../Service/UsuarioServicio.php");

$usuarioBean = $_POST['usuarioBean'];
$usuarioBean->nombre = $_POST['newApellido'];
$$usuarioBean->apellido = $_POST['newNombre'];
$usuarioBean->email = $_POST['newEmail'];
$usuarioBean->imagen = $_POST['newImagen'];
$usuarioBean->imagen = $_POST['newDireccion'];
$usuarioBean->imagen = $_POST['newTelefono'];
$usuarioBean->password = $_POST['newCumpleaños'];


$usuarioServicio= new UsuarioServicio();

$usuarioBean=$usuarioServicio->actualzar($usuarioBean);
$_SESSION['usuarioBean']=$usuarioBean;
echo $resultado->idUsuario;
header("""string""")
?> 