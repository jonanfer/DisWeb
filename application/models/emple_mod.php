<?php 
class Emple_mod extends CI_Model{

	var $id_us        = '';
	var $document_us  = '';
	var $firstName_us = '';
	var $lastName_us  = '';
	var $phone_us     = '';
	var $email_us     = '';
	var $user_us      = '';
	var $password_us  = '';
	var $state_us     = '';
	var $rol_us       = '';



	function lstUs(){
		$this->document_us = $this->session->userdata("idUser");
		$query = $this->db->get_where('user',array('document_us' => $this->document_us));
		return $query->result();
	}


	/*=================================*/
	/*ver usuarios*/
	/*=================================*/
	function lst($id){
		$this->id_us = $id;
		$query = $this->db->get_where('user',array('id_us' => $this->id_us));
		return $query->result();
	}

	/*=================================*/
	/*modificar usuarios*/
	/*=================================*/
	function modUser()
	{
		$this->document_us     = $this->input->post('document_us');
		$this->firstName_us    = $this->input->post('firstName_us');
		$this->lastName_us     = $this->input->post('lastName_us');
		$this->phone_us        = $this->input->post('phone_us');
		$this->email_us        = $this->input->post('email_us');
		$this->user_us         = $this->input->post('user_us');
		$this->password_us     = $this->input->post('password_us');
		$this->state_us        = $this->input->post('state_us');
		$this->rol_us          = $this->input->post('rol_us');

		$this->db->where('id_us');
		if (!$this->db->update('user', $this)) {
			/*echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('error');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-warning fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Warning!</h4>";
      		echo "<p>Se ha encontrado un error al tratar de modificar este usuario...</p>";
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
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('usuario modificado con exito');";
			echo "</script>";*/
			echo "<div class = 'row'>";
            echo "<div class = 'col-md-6 col-md-offset-3' >";
			echo "<div class='alert alert-info fade in'>";
      		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      		echo "<h4>Congratulations!</h4>";
      		echo "<p>Usuario Modificado con Exito!!!</p>";
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
	/*Eliminar*/
	/*=================================*/
	function eliUser($id)
	{

		$this->db->where('id_us', $id);
		if (!$this->db->delete('user')) {
			echo "<script>";
			echo "alert('Problemas al eliminar el usuario');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "alert('Usuario eliminado con exito');";
			echo 'window.location.replace("'.base_url().'");';	
			echo "</script>";
		}
	}
}