<?php
include("../Service/UsuarioServicio.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$usuarioServicio= new UsuarioServicio();

$usuarioBean=$usuarioServicio->iniciarSesion($usuario,$password);
$_SESSION['usuarioBean']=$usuarioBean;
echo $resultado->idUsuario;
?> 