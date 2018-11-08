<?php
require_once('head.php');
//incluye la clase Cliente y CrudCliente
require_once('crud.php');

$crud  = new Crud_Cliente();

$total = 0;

$cliente=$crud->obtenerCliente($_GET['id']);
$mes=$crud->obtenerRetiroMes($_GET['id'],$_GET['mes']);
?>

<div class="container">


      <div class="row">
      <div class="col-md-12 text-center">
        <h2>Reporte de :</h2>
        <p class="lead">Por favor considere el medio ambiente antes de imprimir este reporte.</p>
      </div>


        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Resumen del Mes</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">

			<?php foreach ($listaRetiro as $retiro) {?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo $retiro["fecha"]?></h6>
              </div>
              <span class="text-muted"><?php echo $retiro["kilos"]?></span>
            </li>
			<?php 
				$total = $total + $retiro["kilos"];
				}
				
			?>


            <li class="list-group-item d-flex justify-content-between">
              <span>Total Litros</span>
              <strong><?php echo $total?></strong>
            </li>
          </ul>

            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Datos Cliente</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value='<?php echo $cliente["nombre"] ?>' required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Teléfono</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $cliente["telefono"] ?>" required>

              </div>
            </div>

            <div class="mb-3">
              <label for="username">Correo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" value="<?php echo $cliente["correo"] ?>" placeholder="Username" required>
 
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Ciudad</label>
              <input type="text" class="form-control" id="address" value="<?php echo $cliente["ciudad"] ?>" placeholder="1234 Main St" required>

            </div>

            <div class="mb-3">
              <label for="address2">Dirección <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" value="<?php echo $cliente["direccion"] ?>" id="address2" placeholder="Apartment or suite">
            </div>

		
		<div class="row">
              <div class="col-md-4 mb-4">
                <label for="firstName">T1</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $cliente["t1"] ?>" required>
              </div>
              <div class="col-md-4 mb-4">
                <label for="lastName">T2</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $cliente["t2"] ?>" required>

              </div>
			  <div class="col-md-4 mb-4">
                <label for="lastName">T3</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $cliente["t3"] ?>" required>

              </div>
            </div>


        </div>
	
      </div>
	  <hr>
</div>




<?php require_once('footer.php'); ?>