<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleado extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('emple_mod');

		if ($this->session->userdata('rol') != 'Empleado') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
	}

	/*===========================================*/
	/*Function views users*/
	/*===========================================*/
	public function index()
	{
		$data['lu'] = $this->emple_mod->lstUs();
		$this->load->view('empleado/index', $data);
	}

	/*===========================================*/
	/*Function disweb emple*/
	/*===========================================*/
	public function disweb()
	{
		$this->load->view('empleado/disweb');
	}


	public function updUs()
	{
		$data['lu'] = $this->emple_mod->lstUs();
		$this->load->view('empleado/updateUs', $data);

		if ($_POST){
			$this->emple_mod->modUser();
		}
	}

	/*===========================================*/
	/*Function delete user*/
	/*===========================================*/
	public function del($id)
	{
		$this->emple_mod->eliUser($id);
	}

}
