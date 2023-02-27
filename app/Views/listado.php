<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="<?php echo base_url()?>/css/styles.css" rel="stylesheet"/>

    <title>CRUD</title>
  </head>
  <body>

  <div class="container">
	   <h1>OBRAS EN PROCESO</h1>
	   <div class="row">
		   <div class="col-sm-12">

			  <form method="POST" action="<?php echo base_url().'/crear' ?>">
			  
	        <form>

	      		<div class="form-group row">
			        <label for="nombre" class="col-sm-2 col-form-control">Nombre de la obra</label>
			         <div class="col-sm-10">
			         <input type="text" name="nombre" class="form-control" id="nombre" placehor="nombre">
			        </div>
			      </div>

		       <div class="form-group row">
			          <label for="Descripcion" class="col-sm-2 col-form-control">Descripción </label>
			           <div class="col-sm-10">
				        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion">
			          </div>
		       </div>

		        <div class="form-group row">
			          <label for="proposito" class="col-sm-2 col-form-control">Fecha</label>
			           <div class="col-sm-10">
				       <input type="date" name="fecha" class="form-control" id="fecha">
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
                  <th>ID</th>
                  <th>Nombre de la obra</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                <?php foreach($datos as $key): ?>
                  <tr>
                  <td><?php echo $key->id ?></td>
                    <td><?php echo $key->Nombre ?></td>
                    <td><?php echo $key->Descripcion ?></td>
                    <td><?php echo $key->Fecha ?></td>
                    <td>
                      <a href="<?php echo base_url(). '/obtenerNombre/'.$key->id ?>" class="btn btn-warning btn-smal">Editar</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url(). '/eliminar/'.$key->id ?>" class="btn btn-danger btn-smal">Eliminar</a> 
                    </td>
                  </tr>
                <?php endforeach; ?>

              </table>
            </div>
          </div>
         </div>




         <main>
     <div class="container">
     <div class="row">
     <?php foreach($datos as $row):  ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">

                <img src="">                
                <div class="card-body">
                <img class="img-fluid" src="assets/img/obra1.jpg" />
                  <h5 class="card-title"><?php echo $row->Nombre ?></h5>
                  <p class="card-text"><?php echo $row->Descripcion ?></p>
                          
                    <div class="btn-group">
                      <a href="" class="btn btn-primary">Detalles</a>
                    </div>  
                   
                  </div>
                </div>
              </div>
              <?php endforeach; ?> 
            </div>
          </div>
     </div>
   </main>


                      <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

           <script type="text/javascript">
           let mensaje = '<?php echo $mensaje ?>';

           if (mensaje == '1') {
            swal(':D','Agregado con exito!','success');
            }else if (mensaje == '0'){
            swal(':(','Fallo al agregar!','error');
             }else if (mensaje == '2'){
            swal(':D','Actualizado con exito!','success');
             }else if (mensaje == '3'){
            swal(':(','Fallo al actualizar!','error');
            }else if (mensaje == '4'){
            swal(':D','Eliminado con exito!','success');
             }else if (mensaje == '5'){
            swal(':(','Fallo al eliminar!','error');
              }


    </script>
  </body>
</html>