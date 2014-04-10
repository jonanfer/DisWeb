<?php 
class User_mod extends CI_Model{

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

    function lstDise()
	{
		$query = $this->db->get_where('user', array('rol_us' => 'Diseñador'));
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
      		echo "<a href='http://localhost/DisWeb/user' class='button success'>Aceptar</a>";
      		//echo "<button onclick='location.href=""' type='button' id='alert' class='btn btn-default'>Aceptar</button>";
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


	/*=================================*/
	/*registrar usuarios*/
	/*=================================*/
	function regisUser()
	{
		$this->document_us     = $this->input->post('document_us');
		$this->firstName_us    = $this->input->post('firstName_us');
		$this->lastName_us     = $this->input->post('lastName_us');
		$this->phone_us        = $this->input->post('phone_us');
		$this->email_us        = $this->input->post('email_us');
		$this->user_us         = $this->input->post('user_us');
		$this->password_us     = md5($this->input->post('password_us'));
		$this->state_us        = $this->input->post('state_us');
		$this->rol_us          = $this->input->post('rol_us');

		if (!$this->db->insert('user', $this)) {
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('error');";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo 'window.location.replace("'.base_url().'");';
			echo "alert('usuario adicionado con exito');";
			echo "</script>";
		}
	}

	/*=================================*/
	/*Validar Usuario*/
	/*=================================*/
	public function validateUser()
	{
		$this->user_us     = $this->input->post('user_us');
		$this->password_us = md5($this->input->post('password_us'));
		$this->state_us    = 'Activo';

		$this->db->select('*');
		$this->db->where('user_us', $this->user_us);
		$this->db->where('password_us', $this->password_us);
		$this->db->where('state_us', $this->state_us);
		$this->db->limit(1);
		$this->db->from('user');

		$query = $this->db->get();

		foreach ($query->result() as $row) 
		{
			$this->session->set_userdata(array('idUser' => $row->document_us, 
											   'name'   => $row->firstName_us,
											   'rol'    => $row->rol_us,
											   'estado' => $row->state_us));
		}	
		if ($query->num_rows() > 0) 
		{
			if ($this->session->userdata('rol') == 'Administrador' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('admin', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Empleado' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('empleado', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Diseñador' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('disenador', 'refresh');
			}
			if ($this->session->userdata('rol') == 'Usuario' && $this->session->userdata('estado') == 'Activo') 
			{
				redirect('user', 'refresh');
			}
		}
		else
		{
			echo "<script>";
			echo "alert('Usuario o Contraseña incorrectas o esta Inactivo');";
			echo 'window.location.replace("'.base_url().'");';
			echo "</script>";
		}
	}
}