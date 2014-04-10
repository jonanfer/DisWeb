<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_mod');
		$this->removeCache();
		//$this->ruta = base_url().'user';
	}

	/*===========================================*/
	/*Function iniciar session*/
	/*===========================================*/
	/*public function index()
	{
       $this->load->view('registro');
	}*/

	/*===========================================*/
	/*Function Add*/
	/*===========================================*/
	public function index()
	{
		if ($_POST){

			$this->form_validation->set_message('required', '%s Requerido');
			$this->form_validation->set_message('is_numeric', '%s debe ser números');
			$this->form_validation->set_message('valid_email', '%s debe ser valido');
			$this->form_validation->set_message('is_unique', '%s no esta disponible');

			$this->form_validation->set_rules('document_us', 'Documento', 'required|is_numeric|is_unique[user.document_us]');
			$this->form_validation->set_rules('firstName_us', 'Nombre', 'required');
			$this->form_validation->set_rules('lastName_us', 'Apellidos', 'required');
			$this->form_validation->set_rules('phone_us', 'Telefono', 'required|is_numeric');
			$this->form_validation->set_rules('email_us', 'Correo Electronico', 'required|valid_email|is_unique[user.email_us]');
			$this->form_validation->set_rules('user_us', 'Usuario', 'required|is_unique[user.user_us]');
			$this->form_validation->set_rules('password_us', 'Contraseña', 'required');
			$this->form_validation->set_rules('rol_us', 'Rol', 'required');
			$this->form_validation->set_rules('state_us', 'Estado', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->register_mod->validateUser();
			}
		}
		$this->load->view('registro');
	}

}
