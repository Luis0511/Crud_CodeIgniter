<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelPrueba extends CI_Model {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                    
        }
    function registrardb($data){

        $this->db->insert('usuarios',array('nombre'=>$data['nombre'],'pasword'=>$data['password'],'gmail'=>$data['email']));
        $this->db->close();
    }
    function obtenerDatos(){
        $query= $this->db->query('SELECT * FROM usuarios');
        if($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
    }
    public function obtenerNombre($id){
        $id_usua= (integer)($id);
        //var_dump($id_usua);
        $query=$this->db->query("SELECT * FROM usuarios where id_usuario=$id_usua");
        return $query->result_array();

    }

    public function actualizar($data, $idData)
    {
        $this->db->where('id_usuario',$idData);
        $this->db->update('usuarios',$data);
        $this->db->close();
    }
    public function eliminarFila($var)
    {
        $this->db->where('id_usuario', $var);
        $this->db->delete('usuarios');
    }
   
}
?>