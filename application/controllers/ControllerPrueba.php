<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPrueba extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->model('modelPrueba');
                
        }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    function muestra()
    {   
        $this->load->view('/templates/header');
        $this->load->view('pruebamuestra');
        $this->load->view('/templates/footer');
    }

    function registro(){
        /* $nombre =$this->input->post('nombre');
        $email =$this->input->post('email');
        $password =$this->input->post('password');
        var_dump($nombre.$email.$password); */
        $data=array(
            'nombre'=>$this->input->post('nombre'),
            'email' =>$this->input->post('email'),
            'password' =>$this->input->post('password')
        ); 
        //var_dump($data);
        $this->modelPrueba->registrardb($data);
        $this->load->view('/templates/header');
        $this->load->view('vistaregistrodb');
        $this->load->view('/templates/footer');
    }
    function mostrardatos(){
        $arreglo['users']= $this->modelPrueba->obtenerDatos();
        //var_dump($arreglo);
        $this->load->view('/templates/header');
        $this->load->view('vistaDatos',$arreglo);
        $this->load->view('/templates/footer');
    }

    function editar($data){
        
        $arreglo['idusuario']= $this->modelPrueba->obtenerNombre($data);
        //print_r($arreglo);
        $this->load->view('/templates/header');
        $this->load->view('vistaEditar',$arreglo);
        $this->load->view('/templates/footer');
        
    }
    function actualizar(){
        $data=array(
            'nombre'=>$_POST['nombre'],
            'gmail' =>$_POST['gmail']
            //'password' =>$this->input->post('password')
        );
        //var_dump($data);
        $id_data=$_POST['id_usuario'];
        $this->modelPrueba->actualizar($data, $id_data);
        $url = prep_url(base_url().'index.php/ControllerPrueba/mostrardatos');
        redirect($url);

    }
    function eliminar($data){
        $this->modelPrueba->eliminarFila($data);
        $url = prep_url(base_url().'index.php/ControllerPrueba/mostrardatos');
        redirect($url);
    }
}
//27209059 MARTA 28 MARZO 1951
//5253888 LUIS FICENCIO 1 JUNIO 1955