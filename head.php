
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://getbootstrap.com/favicon.ico">
  <title>Sistemas de Aceites</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://getbootstrap.com/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">

  <!-- Custom styles DataTables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<style type="text/css" class="init"></style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
      $('#example').DataTable( {
        "language": {
                      "sProcessing":     "Procesando...",
                      "sLengthMenu":     "Mostrar _MENU_ registros",
                      "sZeroRecords":    "No se encontraron resultados",
                      "sEmptyTable":     "Ningún dato disponible en esta tabla",
                      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                      "sInfoPostFix":    "",
                      "sSearch":         "Buscar:",
                      "sUrl":            "",
                      "sInfoThousands":  ",",
                      "sLoadingRecords": "Cargando...",
                      "oPaginate": {
                          "sFirst":    "Primero",
                          "sLast":     "Último",
                          "sNext":     "Siguiente",
                          "sPrevious": "Anterior"
                      },
                      "oAria": {
                          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                      }
                    }
      } );
    } );
  </script>

  <style>
    .btn-sample { 
      color: #ffffff; 
      background-color: #319B25; 
      border-color: #1F1F1F; 
    } 
    
    .btn-sample:hover, 
    .btn-sample:focus, 
    .btn-sample:active, 
    .btn-sample.active, 
    .open .dropdown-toggle.btn-sample { 
      color: #ffffff; 
      background-color: #0B701F; 
      border-color: #1F1F1F; 
    } 
    
    .btn-sample:active, 
    .btn-sample.active, 
    .open .dropdown-toggle.btn-sample { 
      background-image: none; 
    } 
    
    .btn-sample.disabled, 
    .btn-sample[disabled], 
    fieldset[disabled] .btn-sample, 
    .btn-sample.disabled:hover, 
    .btn-sample[disabled]:hover, 
    fieldset[disabled] .btn-sample:hover, 
    .btn-sample.disabled:focus, 
    .btn-sample[disabled]:focus, 
    fieldset[disabled] .btn-sample:focus, 
    .btn-sample.disabled:active, 
    .btn-sample[disabled]:active, 
    fieldset[disabled] .btn-sample:active, 
    .btn-sample.disabled.active, 
    .btn-sample[disabled].active, 
    fieldset[disabled] .btn-sample.active { 
      background-color: #319B25; 
      border-color: #1F1F1F; 
    } 
    
    .btn-sample .badge { 
      color: #319B25; 
      background-color: #ffffff; 
    }



    a.wsnextlink1:link{text-decoration: none; color:#2E9D26;} 
    a.wsnextlink1:visited{text-decoration: none; color:#BBD704;} 
    a.wsnextlink1:hover{text-decoration: none; color:#BBD70D;}


    
    a.wsnextlink2:link{text-decoration: none; color:#329B28;} 
    a.wsnextlink2:visited{text-decoration: none; color:#329B28;} 
    a.wsnextlink2:hover{ text-decoration: none; color:#329B28;}

  </style>


</head>

<body style="background-color: #FEFEFE;">
<div class="container">

<nav class="navbar navbar-light" style="background-color: #FEFEFE;">
  <img class="navbar-brand" src="logo.jpeg" alt="logo" width="50" height="50">
  <a class="navbar-brand" href="index.php"><b>SISTEMA RECIMARD ®</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" align="center">
      <li class="nav-item active">
        <a class="wsnextlink2" href="view_ingresar_clientes.php"><i class="fas fa-user-alt"></i> <b>INGRESAR CLIENTE</b> <span class="sr-only">(current)</span></a>
      </li>
    
	    <li class="nav-item active" align="center">
        <a class="wsnextlink2" href="view_mostrar_clientes.php"><i class="fas fa-users"></i> <b>VER CLIENTES</b> <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active" align="center">
        <a class="wsnextlink2" href="view_mostrar_global.php"><i class="fas fa-chart-bar"></i> <b>VER REPORTE GLOBAL</b> <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
