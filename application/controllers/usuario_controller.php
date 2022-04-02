<?php 

	class Usuario_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('usuario_model');
		}
	
	private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}
		
		/**
	    * Muestraa todos los usuarios en tabla */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Usuarios');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('usuarios' => $this->usuario_model->get_usuarios() );

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('usuarios/usuarios_todos',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		function form_agrega_usuario()  	
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Agregar Usuario');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('usuarios/agregar_usuario');
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		function agregar_usuario()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			/*$this->form_validation->set_rules('username', 'Usuario', 
											'trim|required|xss_clean|is_unique[usuarios.username]');*/
			$this->form_validation->set_rules('username', 'Usuario', 
											'trim|required|is_unique[usuarios.username]');
			//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
			$this->form_validation->set_rules('password', 'Contraseña','required');

			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Las contraseñas ingresadas no coincide</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('re_password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'perfil_id'=>'2',
				'username'=>$this->input->post('username',true),
				'password'=>($pass)
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('usuarios/agregar_usuario');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->add_user($data);

				//Redirecciono
				redirect('usuarios_todos');
			}	
		}

		function usuarios_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Usuarios eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(
		        'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('usuarios/usuarios_eliminados', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		function eliminar_usuario(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'baja'=>'SI'
	    	);

	    	$this->usuario_model->estado_usuario($id, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }

	    /**
		* Obtiene los datos del producto a activar
		*/
	    function activar_usuario(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'baja'=>'NO'
	    	);

	    	$this->usuario_model->estado_usuario($id, $data);
	    	redirect('usuarios_todos', 'refresh');
	    }
		
		function muestra_modificar()
		{
			$id_usuario = $this->uri->segment(2);
			$datos_usuarios = $this->usuario_model->edit_usuario($id_usuario);

			if ($datos_usuarios != FALSE) {
				foreach ($datos_usuarios->result() as $row) 
				{
					
					$id_usuario = $row->id_usuario;
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$username = $row->username;
					$password = $row->password;
					$perfil_id = $row->perfil_id;
					$baja = $row->baja;				
				}

				$dat = array('usuarios' =>$datos_usuarios,
					'id_usuario'=>$id_usuario,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'username'=>$username,
					'password'=>$password,
					'perfil_id'=>$perfil_id,
					'baja'=>$baja,
					
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Usuario');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/head_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('usuarios/modificar_usuario', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		/**
	    * Verifica datos para modificar un producto
	    */
		function modificar_usuario()
		{
			//Validación del formulario
			$this->form_validation->set_rules('nombre', 'nombre', 'required');
			$this->form_validation->set_rules('apellido', 'apellido', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('username', 'username','required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('perfil_id', 'perfil_id', 'required|numeric');
			$this->form_validation->set_rules('baja', 'baja', 'required');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

			$id_usuario= $this->uri->segment(2);
			$datos_usuario= $this->usuario_model->edit_usuario($id_usuario);

			

			$dat = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'username'=>$this->input->post('username',true),
				'password'=>$this->input->post('password',true),
				'perfil_id'=>$this->input->post('perfil_id',true),
				'baja'=>$this->input->post('baja',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('usuarios/modificar_usuario', $dat);
				$this->load->view('front/footer_view');
			}
			else{
				$this->usuario_model->update_usuario($id_usuario, $dat);
	    		redirect('usuarios_todos', 'refresh');
			}
		}

		function cargo_consulta()
				{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('consulta', 'consulta', 'required');
			
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consulta.email]');
			$this->form_validation->set_rules('nombre', 'nombre', 'required');
			$this->form_validation->set_rules('apellido', 'apellido', 'required');
			
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');
		
			


			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'consulta'=>$this->input->post('consulta',true),
				'email'=>$this->input->post('email',true),
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true)
				
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error

			

				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('partes/Contacto2');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				

				$consulta = $this->usuario_model->add_consulta($data);

				
			
			redirect('contacto2');
			}	
		}


		function contacto2()
		{
			$data = array('titulo' => 'Contacto');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('consulta' => $this->usuario_model->get_consultas() );

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('partes/Contacto2',$dat);
			$this->load->view('front/footer_view');
		}
		
		function consultas()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Consultas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('consulta' => $this->usuario_model->get_consultas() );

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('usuarios/muestra_consultas',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		function eliminar_consulta(){
	    	$id_consulta = $this->uri->segment(2); 
	    	
	    

	    	$this->usuario_model->delete_consulta($id_consulta);
	    	redirect('consultas', 'refresh');
	    }

	    function perfil()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Mi Perfil');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			$data['username'] = $session_data['username'];
			$data['email'] = $session_data['email'];

			$dat = array('usuarios' => $this->usuario_model->get_usuarios() );

			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('partes/perfil',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

}
		