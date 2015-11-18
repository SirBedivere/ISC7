<html>
	<title>
	
	</title>
		
		<head>
			<meta charset=utf-8>
			<script src="../Css/jquery.js">
			</script>
			<link rel="stylesheet" href="../Css/bootstrap/css/bootstrap.min.css"/>
			<link rel="stylesheet" href="../Css/bootstrap/css/bootstrap-theme.min.css"/>
			<script src="../Css/bootstrap/js/bootstrap.min.js">
			</script>
			<link rel="stylesheet" type="text/css" href="../Css/main.css"/>		
			
		</head>
		
			<body>
				<div class="Encabezado">
					<?php
					session_start();


					$usuarioBean=isset($_SESSION['usuarioBean']) ? $_SESSION['usuarioBean']:"";
					if ($usuarioBean!=null && $usuarioBean->esAdmin!=null && $usuarioBean->esAdmin!=0){
						include "EncabezadoAdmin.php";
					}else{
						include "Encabezado.php";
					}?>
				</div>
				
				<div class="Contenido">
			