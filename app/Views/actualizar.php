<?php 

    $id = $datos[0]['id'];
    $Nombre = $datos[0]['Nombre'];
    $Descripcion = $datos[0]['Descripcion'];
    $Fecha = $datos[0]['Fecha']; 
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar datos</title>
  </head>
  <body>

  <div class="container">
	   <h1>OBRAS EN PROCESO ACTUALIZAR DATOS</h1>


	   <div class="row">
		   <div class="col-sm-12">
		   <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
		   <input type="text" id="id" name="id" hidden="" 
		    value="<?php echo $id ?>"  >			  
		   <form>

<div class="form-group row">
  <label for="nombre" class="col-sm-2 col-form-control">Nombre de la obra</label>
   <div class="col-sm-10">
   <input type="text" name="nombre" class="form-control" id="nombre" placehor="nombre"
   value="<?php echo $Nombre ?>">
  </div>
</div>

<div class="form-group row">
	<label for="Descripcion" class="col-sm-2 col-form-control">Descripción </label>
	 <div class="col-sm-10">
	  <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion"
	  value="<?php echo $Descripcion ?>">
	</div>
</div>

<div class="form-group row">
	<label for="proposito" class="col-sm-2 col-form-control">Fecha</label>
	 <div class="col-sm-10">
	 <input type="date" name="fecha" class="form-control" id="fecha"
	 value="<?php echo $Fecha ?>">
   </div>
</div>


  <br>
	<form>
		<div class="form-group row">
		  <div class="col-sm-10">
		  <button class="btn btn-warning">Guardar</button>
	   </div>
	  </div>
	</form>																	
		   </div>
	   </div>
     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>