<?php
//incluye la clase Libro y CrudLibro
    require_once('head.php');
	require_once('crud.php');


	$crud  = new Crud_Cliente();

	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$cliente=$crud->obtenerCliente($_GET['id']);
?>


<form action='controlador.php' method='post'>
<input type='hidden' name='id' value='<?php echo $cliente["id"] ?>'>
	<hr>
	<div class="col-md-12 order-md-1">
	  <h4 class="mb-3">Datos Cliente</h4>
		<div class="row">
		  <div class="col-md-6 mb-3">
			<label for="firstName">Nombre</label>
			<input type="text" value='<?php echo $cliente["nombre"] ?>' class="form-control" id="nombre" name="nombre" placeholder="Nombre del Cliente" required>
		  </div>
		  <div class="col-md-6 mb-3">
			<label for="lastName">Teléfono</label>
			<input type="text" value='<?php echo $cliente["telefono"] ?>' class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>

		  </div>
		</div>

		<div class="mb-3">
		  <label for="username">Correo</label>
		  <div class="input-group">
			<div class="input-group-prepend">
			  <span class="input-group-text">@</span>
			</div>
			<input type="text" value='<?php echo $cliente["correo"] ?>' class="form-control" id="correo" name="correo"  placeholder="Correo" required>

		  </div>
		</div>


		<div class="row">
		  <div class="col-md-6 mb-3">
			<label for="firstName">Ciudad</label>
			<input type="text" value='<?php echo $cliente["ciudad"] ?>' class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad del Cliente" required>
		  </div>
		  <div class="col-md-6 mb-3">
			<label for="lastName">Dirección</label>
			<input type="text" value='<?php echo $cliente["direccion"] ?>' class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>

		  </div>
		</div>
	
	<div class="row">
		  <div class="col-md-4 mb-4">
			<label for="firstName">Tambor 60</label>
			<input type="text" value='<?php echo $cliente["t1"] ?>' class="form-control" id="t1" name="t1" placeholder="Kilos"  required>
		  </div>
		  <div class="col-md-4 mb-4">
			<label for="lastName">Tambor 120</label>
			<input type="text" value='<?php echo $cliente["t2"] ?>' class="form-control" id="t2" name="t2" placeholder="Kilos"  required>

		  </div>
		  <div class="col-md-4 mb-4">
			<label for="lastName">Tambor 160</label>
			<input type="text" value='<?php echo $cliente["t3"] ?>' class="form-control" id="t3" name="t3" placeholder="Kilos"  required>

		  </div>

		<input type='hidden' name='actualizar' value='actualizar'>
	</div>


<hr>
	
<input type='submit' class="form-control btn-sample"  value='Actualizar' name='actualizar'>
</form>

</div>
<?php require_once('footer.php'); ?>