<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	//var $ruta = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('solicitud_mod');
		$this->upload_i   = "./public/images/";

		if ($this->session->userdata('rol') != 'Usuario' || $this->session->userdata('rol') != 'Empleado') {
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
		$data['lweb'] = $this->solicitud_mod->lstdisWeb1();
		$data['lgra'] = $this->solicitud_mod->lstdisGra1();
		$data['lint'] = $this->solicitud_mod->lstdisInt1();
		$data['lu'] = $this->solicitud_mod->lstSolUs();		
		$this->load->view('user/solicitud', $data);
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

   /* public function dise()
	{
		$data['lweb'] = $this->solicitud_mod->lstdisWeb();
		$data['lgra'] = $this->solicitud_mod->lstdisGra();
		$data['lint'] = $this->solicitud_mod->lstdisInt();
		$data['lu'] = $this->solicitud_mod->lstSol();
		$this->load->view('disenador/disenos', $data);
    }*/
	/*===========================================*/
	/*Function Add*/
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
	/*Function view solicitud*/
	/*===========================================*/
	public function lst($id)
	{
		$data['lu'] = $this->solicitud_mod->lst($id);
		$this->load->view('user/viewSolicitud', $data);
	}

	public function lstEmple($id)
	{
		$data['lu'] = $this->solicitud_mod->lst($id);
		$this->load->view('empleado/viewSolicitud', $data);
	}

	public function lstDise($id)
	{
		$data['lu'] = $this->solicitud_mod->lst($id);
		$this->load->view('disenador/viewSolicitud', $data);
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
