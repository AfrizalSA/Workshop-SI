<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function prosesLogin($username,$password)
	{
		$user=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		return $this->db->get('admin')->row();
	}
}