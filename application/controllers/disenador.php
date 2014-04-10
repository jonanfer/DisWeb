<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disenador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dise_mod');

		if ($this->session->userdata('rol') != 'Diseñador') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
	}

	/*===========================================*/
	/*Function views users*/
	/*===========================================*/
	public function index()
	{

		$data['lu'] = $this->dise_mod->lstUs();
		$this->load->view('disenador/index', $data);
	}

	/*===========================================*/
	/*Function disweb diseñador*/
	/*===========================================*/
	public function disweb()
	{
		$this->load->view('disenador/disweb');
	}


    public function updUs()
	{
		$data['lu'] = $this->dise_mod->lstUs();
		$this->load->view('disenador/updateUs', $data);

		if ($_POST){
			$this->dise_mod->modUser();
		}
	}
	/*===========================================*/
	/*Function delete user*/
	/*===========================================*/
	public function del($id)
	{
		$this->dise_mod->eliUser($id);
	}
}
