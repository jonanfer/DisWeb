<?php 
class Solicitud_mod extends CI_Model{

	var $id_solicitud     = '';
	var $usuario_id       = '';
	var $tip_solicitud    = '';
	var $fecha_solicitud  = '';
	var $ima_solicitud    = '';
	var $des_solicitud    = '';
	var $est_solicitud    = '';

	public function __construct()
	{
		parent::__construct();
		$this->upload_i = './public/images';
	}


	function lstSol()
	{
		/*$query = $this->db->get('user');
		return $query->result();*/

		$this->db->order_by("id_solicitud", "asc");
		$query = $this->db->get('solicitudes');
		return $query->result();
	}

	function lstSolUs(){
		$this->usuario_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('solicitudes',array('usuario_id' => $this->usuario_id));
		return $query->result();
	}

	function lstdisWeb1()
    {
    	$this->usuario_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño Web',
			'usuario_id' => $this->usuario_id));
		return $query->result();
    }

    function lstdisGra1()
    {
    	$this->usuario_id = $this->session->userdata("idUser");
    	$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño Grafico',
    	 'usuario_id' => $this->usuario_id));
		return $query->result();
    }

    function lstdisInt1()
    {
    	$this->usuario_id = $this->session->userdata("idUser");
    	$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño de Interiores',
    		 'usuario_id' => $this->usuario_id));
		return $query->result();
    }

    function lstdisWeb()
    {
		$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño Web'));
		return $query->result();
    }

    function lstdisGra()
    {
    	$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño Grafico'));
		return $query->result();
    }

    function lstdisInt()
    {
    	$query = $this->db->get_where('solicitudes',array('tip_solicitud' => 'Diseño de Interiores'));
		return $query->result();
    }


	public function addSol()
	{
		$config = array(
		'upload_path'   => $this->upload_i,
		'allowed_types' => 'gif|jpg|png'
		);
		
		// Cargo la libreria upload con su configuracion
		$this->load->library('upload', $config);
		// Subo la imagen con name='imagen'
		$this->upload->do_upload('ima_solicitud');
		
		// Datos del Archivo Subido
		$datos = $this->upload->data();
		$config = array(
		'file_name' => $datos['file_name'],
		'file_path' => $datos['file_path'],
		'full_name' => $datos['full_path']);

		$this->id_solicitud    = $this->input->post('id_solicitud');
		$this->usuario_id      = $this->input->post('usuario_id');
		$this->tip_solicitud   = $this->input->post('tip_solicitud');
		$this->fecha_solicitud = $this->input->post('fecha_solicitud');
		$this->ima_solicitud   = $config['file_name'];
		$this->des_solicitud   = $this->input->post('des_solicitud');
		$this->est_solicitud   = $this->input->post('est_solicitud');

        if (!$this->db->insert('solicitudes', array(
								'id_solicitud'    =>$this->id_solicitud,
								'usuario_id'      =>$this->usuario_id,
								'tip_solicitud'   =>$this->tip_solicitud,
								'fecha_solicitud' =>$this->fecha_solicitud,
								'ima_solicitud'   =>$this->ima_solicitud,
								'des_solicitud'   =>$this->des_solicitud,
								'est_solicitud'   =>$this->est_solicitud))) 
		{
			/*echo "<script type='text/javascript'>";
			echo "alert('Problemas Al Enviar la Solicitud!');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-warning fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Warning!</h4>";
      		echo "<p>Se ha encontrado un error al tratar de enviar esta solicitud...</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}
		else
		{
			/*echo "<script type='text/javascript'>";
			echo "alert('Solicitud Enviada Con Exito!');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-info fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Congratulations!</h4>";
      		echo "<p>Solicitud Enviada con Exito!!!</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}  
	}


    public function dltProducto($id_solicitud)
	{
		
		$query = $this->db->get_where('solicitudes', array('id_solicitud' => $id_solicitud));
		$ruta = $query->result();
		foreach ($ruta as $key) {
			$rutafinal = $key->ima_solicitud;
		}

		unlink("./public/images/".$rutafinal);

		$this->id_solicitud = $id_solicitud;
		$this->db->where('id_solicitud', $this->id_solicitud);

		if (!$this->db->delete('solicitudes')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas Al Enviar la Solicitud!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('Solicitud Eliminada Con Exito!');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";
		}
	}
		/*=================================*/
	/*ver usuarios*/
	/*=================================*/
	function lst($id){
		$this->id_solicitud = $id;
		$query = $this->db->get_where('solicitudes',array('id_solicitud' => $this->id_solicitud));
		return $query->result();
	}

	/*=================================*/
	/*pendiente*/
	/*=================================*/
	function estpen($id)
	{
		$this->est_solicitud = 'Aprobado';

		$this->db->where('id_solicitud', $id);
		if ($this->db->update('solicitudes', array('est_solicitud'=> $this->est_solicitud))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('solicitud/empleDis').'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*asignado*/
	/*=================================*/
	function estaprob($id)
	{
		$this->est_solicitud = 'Pendiente';

		$this->db->where('id_solicitud', $id);
		if ($this->db->update('solicitudes', array('est_solicitud'=> $this->est_solicitud))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('solicitud/emple').'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*asignado*/
	/*=================================*/
	function estfin($id)
	{
		$this->est_solicitud = 'Asignado';

		$this->db->where('id_solicitud', $id);
		if ($this->db->update('solicitudes', array('est_solicitud'=> $this->est_solicitud))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('solicitud/dise').'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*Finalizado*/
	/*=================================*/
	function estasig($id)
	{
		$this->est_solicitud = 'Finalizado';

		$this->db->where('id_solicitud', $id);
		if ($this->db->update('solicitudes', array('est_solicitud'=> $this->est_solicitud))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('solicitud/dise').'");';	
			echo "</script>";
		}
	}
}


