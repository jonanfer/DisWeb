<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asignacion extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('asigna_mod');
		$this->load->model('user_mod');
		$this->load->model('solicitud_mod');

		if ($this->session->userdata('rol') != 'Empleado') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
		//$this->ruta = base_url().'user';
	}

	/*===========================================*/
	/*Function Add*/
	/*===========================================*/
	public function asigna($id)
	{
		if ($_POST){

			$this->form_validation->set_message('required', '%s Requerido');
			$this->form_validation->set_message('is_numeric', '%s debe ser números');
			$this->form_validation->set_message('valid_email', '%s debe ser valido');
			$this->form_validation->set_message('is_unique', '%s no esta disponible');

			//$this->form_validation->set_rules('id_solicitud', 'Codigo', 'required|is_numeric|is_unique[solicitudes.id_solicitud]');
			$this->form_validation->set_rules('solicitud_id', 'Id de Solicitud', 'required');
			$this->form_validation->set_rules('dise_id', 'Diseñador', 'required');
			$this->form_validation->set_rules('est_asigna', 'Estado de Asignacion', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->asigna_mod->addAsigna();
				$this->asigna_mod->estFinalizado($id);
			}
		}
		$data['asigna'] = $id;
		$data['lstd'] = $this->user_mod->lstDise($id);
		$this->load->view('empleado/addAsigna', $data);
	}

	/*===========================================*/
	/*Function estado pendiente*/
	/*===========================================*/
	public function estasig($id)
	{
		$this->asigna_mod->estasig($id);
	}

	/*===========================================*/
	/*Function estado Aprobado*/
	/*===========================================*/
	public function estfin($id)
	{
		$this->asigna_mod->estfin($id);
	}

}
