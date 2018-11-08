<?php require_once('head.php'); ?>


<form action='controlador.php' method='post'>
    
		<hr>
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Datos Cliente</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Cliente" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>

              </div>
            </div>

            <div class="mb-3">
              <label for="username">Correo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="correo" name="correo"  placeholder="Correo" required>
 
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad del Cliente" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>

              </div>
            </div>
		
		<div class="row">
              <div class="col-md-4 mb-4">
                <label for="firstName">Tambor 60</label>
                <input type="text" class="form-control" id="t1" name="t1" placeholder="Kilos"  required>
              </div>
              <div class="col-md-4 mb-4">
                <label for="lastName">Tambor 120</label>
                <input type="text" class="form-control" id="t2" name="t2" placeholder="Kilos"  required>

              </div>
			  <div class="col-md-4 mb-4">
                <label for="lastName">Tambor 160</label>
                <input type="text" class="form-control" id="t3" name="t3" placeholder="Kilos"  required>

              </div>
			  <input type='hidden' name='insertar'  value='insertar'>
	


        </div>



<hr>
		

	<input type='submit' class="form-control btn-sample" value='Guardar'>
</form>
</div>

<?php require_once('footer.php'); ?>