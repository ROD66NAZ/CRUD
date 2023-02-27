<?php namespace App\Controllers;

   use App\Models\CrudModel;
   use App\Models\CudModel;

class crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();

        $mensaje = session('mensaje');

        $data =[
                "datos" => $datos,
                "mensaje" => $mensaje
        ];

        return view('listado', $data);
    }
    public function crear(){

      $datos = [
                    "nombre" => $_POST['nombre'],
                    "descripcion" => $_POST['descripcion'],
                    "fecha" => $_POST['fecha']
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos); 
        if($respuesta > 0) {
                return redirect()->to(base_url().'/')->with('mensaje','1');
            } else {
                return redirect()->to(base_url().'/')->with('mensaje','0');
        }
  
    }
    public function actualizar(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "fecha" => $_POST['fecha']
                ];
        $id = $_POST['id'];

        $Crud = new CrudModel();

        $respuesta = $Crud->actualizar($datos, $id);

        if($respuesta) {
            return redirect()->to(base_url().'/')->with('mensaje','2');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','3');
    }
    }
    public function obtenerNombre($idNombre) {
        $data = ["id" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
    }

    public function eliminar($id){
        $Crud = new CrudModel();
        $data = ["id" => $id];

        $respuesta = $Crud->eliminar($data);
        if($respuesta) {
            return redirect()->to(base_url().'/')->with('mensaje','4');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','5');
    }
    }
    public function catalogo(){
        echo view('catalogo');
    }

    
    
}
