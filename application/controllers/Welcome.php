<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	//Creamos el constructor de la clase
	public function _construct() {
		parent::_construct();
	}
	public function index(){
		$data['titulo']='principal'; //esta línea se agrega para que podamos variar el título de las páginas

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view.php',$data);
		$this->load->view('front/navbar_view.php');
		$this->load->view('partes/nueva_plantilla.php');
		$this->load->view('front/footer_view.php');
	}
	
	public function quienes_somos(){
		$data['titulo']='quienes_somos';
        
        $session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view.php',$data);
		$this->load->view('front/navbar_view.php');
		$this->load->view('partes/quienes_somos.php');
		$this->load->view('front/footer_view.php');
	}

	public function contacto(){
		$data['titulo']='contacto';
        
        $session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view.php',$data);
		$this->load->view('front/navbar_view.php');
		$this->load->view('partes/contacto.php');
		$this->load->view('front/footer_view.php');
	}

	public function comercializacion(){
		$data['titulo']='comercializacion';
        
        $session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view.php',$data);
		$this->load->view('front/navbar_view.php');
		$this->load->view('partes/comercializacion.php');
		$this->load->view('front/footer_view.php');
	}

	public function terminos(){
		$data['titulo']='terminos';
        
        $session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view.php',$data);
		$this->load->view('front/navbar_view.php');
		$this->load->view('partes/terminos.php');
		$this->load->view('front/footer_view.php');
	}


	public function registro(){
		$data['titulo']='registro';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('front/head_view', $data);
		$this->load->view('front/navbar_view');
		$this->load->view('partes/registro');
		$this->load->view('front/footer_view');
	}

	public function login(){
		$data['titulo']='login';

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view', $data);
		$this->load->view('front/navbar_view');
		$this->load->view('partes/login');
		$this->load->view('front/footer_view');
	}

}
