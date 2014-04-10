<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_mod');

		if ($this->session->userdata('rol') != 'Usuario') {
			redirect('/', 'refresh');	
		}
		$this->removeCache();
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
