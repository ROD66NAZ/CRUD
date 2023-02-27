<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model{
    public function listarNombres(){
        $Nombres =  $this->db->query("SELECT * FROM obras");
        return $Nombres->getResult();

    }
  
    public function insertar($datos){
        $Nombres = $this->db->table('obras');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }
    
    public function obtenerNombre($data){
        $Nombres =  $this->db->table('obras');
		$Nombres->where($data);
        
		return $Nombres->get()->getResultArray();
    }

    public function actualizar($data, $id){
        $Nombres = $this->db->table('obras');
        $Nombres->set($data);
        $Nombres->where('id', $id);
        return $Nombres->update();
    }

    public function eliminar($data){
        $Nombres = $this->db->table('obras');
        $Nombres->where($data);
        return $Nombres->delete();
    }

    
}