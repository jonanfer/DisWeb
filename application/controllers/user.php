<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_mod');
		$this->load->model('adel_mod');
		$this->load->model('solicitud_mod');

		if ($this->session->userdata('rol') != 'Usuario') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
	}


    public function DisAdel()
	{
		$data['lu'] = $this->adel_mod->lstAdelUs();
		$this->load->view('user/listAdelUser', $data);
    }


    /*===========================================*/
	/*Function mostrar solicitudes*/
	/*===========================================*/
	public function solicitud()
	{
		$data['lweb'] = $this->solicitud_mod->lstdisWeb1();
		$data['lgra'] = $this->solicitud_mod->lstdisGra1();
		$data['lint'] = $this->solicitud_mod->lstdisInt1();
		$data['lu'] = $this->solicitud_mod->lstSolUs();		
		$this->load->view('user/solicitud', $data);
    }


	/*===========================================*/
	/*Function views users*/
	/*===========================================*/
	public function index()
	{
		$data['lu'] = $this->user_mod->lstUs();
		$this->load->view('user/index', $data);
	}

	/*===========================================*/
	/*Function disweb user*/
	/*===========================================*/
	public function disweb()
	{
		$this->load->view('user/disweb');
	}


	/*===========================================*/
	/*Function Add Solicitud*/
	/*===========================================*/
	public function add()
	{
		if ($_POST){

			$this->form_validation->set_message('required', '%s Requerido');
			$this->form_validation->set_message('is_numeric', '%s debe ser números');
			$this->form_validation->set_message('valid_email', '%s debe ser valido');
			$this->form_validation->set_message('is_unique', '%s no esta disponible');

			//$this->form_validation->set_rules('id_solicitud', 'Codigo', 'required|is_numeric|is_unique[solicitudes.id_solicitud]');
			$this->form_validation->set_rules('usuario_id', 'Usuario', 'required');
			$this->form_validation->set_rules('tip_solicitud', 'Tipo de Solicitud', 'required');
			$this->form_validation->set_rules('fecha_solicitud', 'Fecha de Solicitud', 'required');
			//$this->form_validation->set_rules('ima_solicitud', 'Imagen', 'required');
			$this->form_validation->set_rules('des_solicitud', 'Descripción', 'required');
			$this->form_validation->set_rules('est_solicitud', 'Estado de Solicitud', 'required');

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == true ) 
			{
				$this->solicitud_mod->addSol();
			}
		}
		$this->load->view('user/addSolicitud');
	}


	/*===========================================*/
	/*Function update user*/
	/*===========================================*/

	public function updUs()
	{
		$data['lu'] = $this->user_mod->lstUs();
		$this->load->view('user/updateUs', $data);

		if ($_POST){
			$this->user_mod->modUser();
		}
	}

	/*===========================================*/
	/*Function delete user*/
	/*===========================================*/
	public function del($id)
	{
		$this->user_mod->eliUser($id);
	}

}
