<?php
require_once "../Conexion/Conexion.php";
require_once "../Beans/Categoria.php";
require_once "../Service/CategoriaServicio.php"
?>

<div class="Encabezado">
	<?php include "../Design/navegadorAdmin.php";?>
</div>

	<div class="container">
		<h2> Agregar Categoria</h2>
			<form method="POST" action="../funciones/altaCategoria.php">
				<label>Nombre</label>
				<input type="text" name="Nombre" class="form-control"></input>
				<label>Descripcion</label>
				<input type="text" name="Descripcion" class="form-control"></input>
				<label>Fecha de creación</label>
				<input type="date" name="FechaCreacion" class="form-control"></input>
				<br></br>
				<center><button  type="submit" class="btn btn-Primary">Guardar</button></center>
				
			</form>
	</div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<div class="pie">
	<?php include"../Design/Pie.php";?>
</div>