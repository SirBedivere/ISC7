<?php
include("../Service/UsuarioServicio.php");

$usuarioBean = $_POST['usuarioBean'];
$usuarioBean->nombre = $_POST['newApellido'];
$$usuarioBean->apellido = $_POST['newNombre'];
$usuarioBean->email = $_POST['newEmail'];
$usuarioBean->imagen = $_POST['newImagen'];
$usuarioBean->password = $_POST['newPassword'];

$usuarioServicio= new UsuarioServicio();

$usuarioBean=$usuarioServicio->actualzar($usuarioBean);
$_SESSION['usuarioBean']=$usuarioBean;
echo $resultado->idUsuario;
header("""string""")
?> 