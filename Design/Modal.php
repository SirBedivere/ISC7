<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      </div>
		<form action="../Funciones/IniciarSesion.php" method= "POST">
		      <div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4"> Usuario</label> <input type="text" name="usuario"/>
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   </div>
			</br>

		      	<div class="row">
			      <div class="col-md-3 col-xs-3">
			      </div>
			      <div class="col-md-6 col-xs-6">
			      		<label class="col-md-4 col-xs-4"> Password</label> <input type="password" name="password"  /> 
			      </div>
			      <div class="col-md-3 col-xs-3">
			      </div>
			   	</div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default">Registrarse</button>
		        <button type="submit" class="btn btn-primary">Iniciar</button>
		      </div>
		    </div>
		  </div>
        </form>
		</div>

