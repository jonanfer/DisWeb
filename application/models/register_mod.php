<?php 
class Register_mod extends CI_Model{

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


	public function validateUser()
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

		$this->db->insert('user', $this);
		$this->db->select('*');
		$this->db->where('document_us', $this->document_us);
		$this->db->where('firstName_us', $this->firstName_us);
		$this->db->where('lastName_us', $this->lastName_us);
		$this->db->where('phone_us', $this->phone_us);
		$this->db->where('email_us', $this->email_us);
		$this->db->where('user_us', $this->user_us);
		$this->db->where('password_us', $this->password_us);
		$this->db->where('state_us', $this->state_us);
		$this->db->where('rol_us', $this->rol_us);
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


