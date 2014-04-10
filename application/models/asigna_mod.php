<?php 
class Asigna_mod extends CI_Model{

	var $cod_asigna    = '';
	var $solicitud_id  = '';
	var $dise_id       = '';
	var $est_asigna    = '';


	function lstSol()
	{
		/*$query = $this->db->get('user');
		return $query->result();*/

		$this->db->order_by("cod_asigna", "asc");
		$query = $this->db->get('asignaciones');
		return $query->result();
	}

	function lstSolUs(){
		$this->dise_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('asignaciones',array('dise_id' => $this->dise_id));
		return $query->result();
	}

	function lstAsig()
	{
		$query = $this->db->get_where('asignaciones', array('cod_asigna' => $this->cod_asigna));
		return $query->result();
	}


	function lstdisAsig()
    {
    	$this->dise_id = $this->session->userdata("idUser");
		$query = $this->db->get_where('asignaciones',array('dise_id' => $this->dise_id,
			'est_asigna' => 'Asignado'));
		return $query->result();
    }

    function lstdisFin()
    {
    	$this->dise_id = $this->session->userdata("idUser");
    	$query = $this->db->get_where('asignaciones',array('dise_id' => $this->dise_id,
    		'est_asigna' => 'Finalizado'));
		return $query->result();
    }

	public function addAsigna()
	{
		$this->cod_asigna    = $this->input->post('cod_asigna');
		$this->solicitud_id  = $this->input->post('solicitud_id');
		$this->dise_id       = $this->input->post('dise_id');
		$this->est_asigna    = $this->input->post('est_asigna');

		if (!$this->db->insert('asignaciones', $this)) {
			/*echo "<script>";
			echo 'window.location.replace("'.base_url('asignacion').'");';
			echo "alert('error');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-warning fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Warning!</h4>";
      		echo "<p>Se ha encontrado un error al tratar de asignar este diseño...</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}
		else{
			/*echo "<script>";
			echo 'window.location.replace("'.base_url('asignacion').'");';
			echo "alert('Diseño Asignado con exito');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-info fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Congratulations!</h4>";
      		echo "<p>Diseño Asignado con Exito!!!</p>";
      		echo "<p>";
      		echo "<button type='button' id='alert' class='btn btn-default'>Aceptar</button>";
      		//echo 'window.location.replace("'.base_url().'");';
      		echo "</p>";
    		echo "</div>";
    		echo "</div>";
    		echo "</div>";
		}
	}

		/*=================================*/
	/*ver usuarios*/
	/*=================================*/
	function lst($id){
		$this->cod_asigna = $id;
		$query = $this->db->get_where('asignaciones',array('cod_asigna' => $this->cod_asigna));
		return $query->result();
	}

	/*=================================*/
	/*pendiente*/
	/*=================================*/
	function estpen($id)
	{
		$this->est_asigna = 'Aprobado';

		$this->db->where('cod_asigna', $id);
		if ($this->db->update('asignaciones', array('est_asigna'=> $this->est_asigna))) 
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
		$this->est_asigna = 'Pendiente';

		$this->db->where('cod_asigna', $id);
		if ($this->db->update('asignaciones', array('est_asigna'=> $this->est_asigna))) 
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
		$this->est_asigna = 'Asignado';

		$this->db->where('cod_asigna', $id);
		if ($this->db->update('asignaciones', array('est_asigna'=> $this->est_asigna))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('asignacion').'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*Finalizado*/
	/*=================================*/
	function estasig($id)
	{
		$this->est_asigna = 'Finalizado';

		$this->db->where('cod_asigna', $id);
		if ($this->db->update('asignaciones', array('est_asigna'=> $this->est_asigna))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('asignacion').'");';	
			echo "</script>";
		}
	}

	/*=================================*/
	/*Finalizado*/
	/*=================================*/
	function estFinalizado($id)
	{
		$this->est_solicitud = 'Asignado';

		$this->db->where('id_solicitud', $id);
		if ($this->db->update('solicitudes', array('est_solicitud'=> $this->est_solicitud))) 
		{
			echo "<script>";
			echo 'window.location.replace("'.base_url('solicitud/emple').'");';	
			echo "</script>";
		}
	}
}


