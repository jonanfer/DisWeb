<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('solicitud_mod');
		$this->upload_i   = "./public/images/";

		if ($this->session->userdata('rol') != 'Empleado') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
		//$this->ruta = base_url().'user';
	}

    public function emple()
	{
		
		$data['lweb'] = $this->solicitud_mod->lstdisWeb();
		$data['lgra'] = $this->solicitud_mod->lstdisGra();
		$data['lint'] = $this->solicitud_mod->lstdisInt();
		$data['lu'] = $this->solicitud_mod->lstSol();
		$this->load->view('empleado/solicitud', $data);
    }

    public function empleDis()
	{
		
		$data['lweb'] = $this->solicitud_mod->lstdisWeb();
		$data['lgra'] = $this->solicitud_mod->lstdisGra();
		$data['lint'] = $this->solicitud_mod->lstdisInt();
		$data['lu'] = $this->solicitud_mod->lstSol();
		$this->load->view('empleado/disenos', $data);
    }


	/*===========================================*/
	/*Function estado pendiente*/
	/*===========================================*/
	public function estpen($id)
	{
		$this->solicitud_mod->estpen($id);
	}

	/*===========================================*/
	/*Function estado Aprobado*/
	/*===========================================*/
	public function estaprob($id)
	{
		$this->solicitud_mod->estaprob($id);
	}

}
