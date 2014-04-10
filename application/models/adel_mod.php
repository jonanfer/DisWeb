<?php 
class Adel_mod extends CI_Model{

	var $id_adelanto    = '';
	var $fecha_adelanto = '';
	var $ima_adelanto   = '';
	var $des_adelanto   = '';
	var $dise_id        = '';
	var $asigna_id      = '';

	public function __construct()
	{
		parent::__construct();
		$this->upload_i = './public/images';
	}


	function lstAdel()
	{
		$this->dise_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('adelantos',array('dise_id' => $this->dise_id));
		return $query->result();
	}

	function lstAdelUs(){
		$this->dise_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('adelantos',array('dise_id' => $this->dise_id));
		return $query->result();
	}

	public function addAdel()
	{
        $config = array(
		'upload_path'   => $this->upload_i,
		'allowed_types' => 'gif|jpg|png'
		);
		
		// Cargo la libreria upload con su configuracion
		$this->load->library('upload', $config);
		// Subo la imagen con name='imagen'
		$this->upload->do_upload('ima_adelanto');
		
		// Datos del Archivo Subido
		$datos = $this->upload->data();
		$config = array(
		'file_name' => $datos['file_name'],
		'file_path' => $datos['file_path'],
		'full_name' => $datos['full_path']);

		$this->id_adelanto    = $this->input->post('id_adelanto');
		$this->fecha_adelanto = $this->input->post('fecha_adelanto');
		$this->ima_adelanto   = $config['file_name'];
		$this->des_adelanto   = $this->input->post('des_adelanto');
		$this->dise_id        = $this->input->post('dise_id');
		$this->asigna_id      = $this->input->post('asigna_id');

		if (!$this->db->insert('adelantos', array(
								'id_adelanto'    =>$this->id_adelanto,
								'fecha_adelanto' =>$this->fecha_adelanto,
								'ima_adelanto'   =>$this->ima_adelanto,
								'des_adelanto'   =>$this->des_adelanto,
								'dise_id'        =>$this->dise_id,
								'asigna_id'      =>$this->asigna_id))) 
		{
			/*echo "<script type='text/javascript'>";
			echo "alert('Problemas Al Enviar el Adelanto!');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-warning fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Warning!</h4>";
      		echo "<p>Se ha encontrado un error al tratar de enviar este adelanto...</p>";
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
			echo "alert('Adelanto Enviado Con Exito!');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-info fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Congratulations!</h4>";
      		echo "<p>Adelanto Enviado con Exito!!!</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}  
	}

	public function dltProducto($id_adelanto)
	{
		
		$query = $this->db->get_where('adelantos', array('id_adelanto' => $id_adelanto));
		$ruta = $query->result();
		foreach ($ruta as $key) {
			$rutafinal = $key->ima_solicitud;
		}

		unlink("./public/images/".$rutafinal);

		$this->id_adelanto = $id_adelanto;
		$this->db->where('id_adelanto', $this->id_adelanto);

		if (!$this->db->delete('adelantos')) 
		{
			echo "<script type='text/javascript'>";
			echo "alert('Problemas Al Eliminar el Adelanto!');";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('Adelanto Eliminado Con Exito!');";
			echo "window.location.replace('".base_url()."');";
			echo "</script>";
		}
	}
}


