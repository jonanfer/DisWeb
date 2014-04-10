<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_mod');
		$this->ruta = base_url().'user';
		$this->removeCache();
	}

	/*===========================================*/
	/*Function iniciar session*/
	/*===========================================*/
	public function index()
	{

			if ($this->session->userdata('rol') == 'Administrador'&& $this->session->userdata('estado') == 'Activo') 
			{
				redirect('admin', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Empleado' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('empleado', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Diseñador' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('disenador', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Usuario' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('user', 'refresh');
			}
		else
		{
			if ($_POST) 
			{
				$this->form_validation->set_message('required', '%s Requerido');
				$this->form_validation->set_rules('user_us', 'Usuario o Email', 'required');
				$this->form_validation->set_rules('password_us', 'Contraseña', 'required');
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

				if ($this->form_validation->run() == true) 
				{
					$this->user_mod->validateUser();
				}
			}
			$this->load->view('login');
		}
	}


	/*===========================================*/
	/*Function cerrar sesion*/
	/*===========================================*/
	public function close()
	{
		$this->session->sess_destroy();
		echo "<script>";
		echo 'window.location.replace("'.base_url().'");';
		echo "</script>";
	}
	
}
