<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adelantos extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adel_mod');
		$this->load->model('user_mod');
		$this->load->model('asigna_mod');
		$this->load->model('solicitud_mod');
		$this->upload_i   = "./public/images/";

		if ($this->session->userdata('rol') != 'Diseñador' || $this->session->userdata('rol') != 'Usuario') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
		//$this->ruta = base_url().'user';
	}

	/*===========================================*/
	/*Function iniciar session*/
	/*===========================================*/
	public function index()
	{
		$data['lu'] = $this->adel_mod->lstAdel();
		$this->load->view('disenador/lstAdelantos', $data);
    }

    public function DisAdel()
	{
		$data['lu'] = $this->adel_mod->lstAdelUs();
		$this->load->view('user/listAdelUser', $data);
    }

	/*===========================================*/
	/*Function Add*/
	/*===========================================*/
	public function asigAdelanto($id)
	{
		if ($_POST){

			$this->form_validation->set_message('required', '%s Requerido');
			$this->form_validation->set_message('is_numeric', '%s debe ser números');
			$this->form_validation->set_message('valid_email', '%s debe ser valido');
			$this->form_validation->set_message('is_unique', '%s no esta disponible');

			//$this->form_validation->set_rules('id_adelanto', 'Codigo', 'required|is_numeric|is_unique[solicitudes.id_solicitud]');
			$this->form_validation->set_rules('fecha_adelanto', 'Fecha', 'required');
			//$this->form_validation->set_rules('ima_adelanto', 'Imagen', 'required');
			$this->form_validation->set_rules('des_adelanto', 'Descripción del Adelanto', 'required');
			$this->form_validation->set_rules('dise_id', 'Codigo Diseñador', 'required');
			//$this->form_validation->set_rules('asigna_id', 'Codigo de Asignación', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->adel_mod->addAdel();
			}
		}
		$data['id_adel'] = $id;
		$data['lsta'] = $this->asigna_mod->lstAsig($id);
		$this->load->view('disenador/adelantos', $data);
	}
}
