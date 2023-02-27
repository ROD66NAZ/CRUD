<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>



    
	<div class="container">
	   <h1>BANCO DE PROYECTOS</h1>
	   <div class="row">
		   <div class="col-sm-12">
			  <from method="POST" action="<?php echo base_url().'/crear' ?>" >
			  
	  <form>
			<div class="form-group row">
			   <label for="nombre" class="col-sm-2 col-form-label">Nombre del proyecto</label>
			   <div class="col-sm-10">
			   <input type="text" name="nombre" class="form-control" id="nombre" placehor="nombre">
			  </div>
			</div>

		  <div class="form-group row">
			  <label for="Descripcion" class="col-sm-2 col-form-label">Descripción del proyecto</label>
			  <div class="col-sm-10">
				<input type="text" name="Descripcion" class="form-control" id="Descripcion" placeholder="Descripcion">
			  </div>
		  </div>

		   <div class="form-group row">
			   <label for="proposito" class="col-sm-2 col-form-label">Propósito del proyecto</label>
			   <div class="col-sm-10">
				 <input type="text" name="proposito" class="form-control" id="proposito" placeholder="proposito">
			  </div>
		   </div>

			 <form>
				 <div class="form-group">
				 <label for="exampleFormControlFile1">PDF de datos</label>
				 <input type="file" class="form-control-file" id="exampleFormControlFile1">
			   </div>
			 </form>
		  <br>
		   <form>
			   <div class="form-group row">
				  <div class="col-sm-10">
				  <button type="submit" class="btn btn-primary">Guardar</button>
			   </div>
			  </div>
			</form>
	  </form>
		   </div>
	   </div>
	   <hr>
        <h2>Datos del proyecto</h2>
        <div class="row">
          <div class="col-sm-12">
            <div class="table table-responsive">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Nombre del proyecto</th>
                  <th>Descripción del proyecto</th>
                  <th>Propósito del proyecto</th>
                  <th>PDF del proyecto</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </div>
	   <hr>
	   <h2>Datos del proyecto</h2>
	   <div class="row">
		 <div class="col-sm-12">
		   <div class="table table-responsive">
			 <table class="table table-hover table-bordered">
			   <tr>
			
	

		     <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
	         <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
	      	 <a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		     <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
		     <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |		 
		     <a href='<?php echo site_url('examples/film_management')?>'>Films</a>
			 </tr>
			 </table>

			 <div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>



		 </div>
		 </div>
	  </div>
    </div>



    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>



	<!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
