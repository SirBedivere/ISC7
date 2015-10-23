<h2>Venta</h2>


<form method="post" action="">

	<label>Estatus:</label>
		<select name="estatua" class="form-control">
			<option value="" disabled selected>Seleccionar</option>
			<option value="1">Pendiente</option>
			<option value="2">Cerrado</option>
			<option value="3">Alta</option>
		</select>
	<label>Fecha:</label>
	<input type="text" name="fecha" value="<?PHP echo date ("d/m/y H:i:s"); ?>"> </input>
	
	<label>Modelo:</label>
	<input type="text" name="modelo" class="form-control">
	<label>Descripci&oacute;n:</label>
	<textarea name="descripcion" class="form-control"></textarea>
	<label>Categor&iacute;as</label>
		<select name="categoria"  class="form-control">
		<?php
			// mostrar categorías
			$categorias = new Categoria();
			$categoriasServicio = new CategoriaServicio();
			foreach($categoriasServicio->findAll() as $categoria) {
				echo "<option value='" . $categoria->nombre . "'>" . $categoria->nombre . "</option>";
			}
		?>
	</select>


	<input type="submit" value="Agregar">
	
</form>