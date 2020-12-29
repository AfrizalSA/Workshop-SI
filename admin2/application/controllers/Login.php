<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

 public function __Construct() {
        parent::__Construct();
        $this->load->model('m_login');
        
    }
	public function index()
	{
		$this->load->view('login');
		$this->load->library('session');
	}

	public function login()
	{ 
		$user=$this->input->post('User-login');
		$password=$this->input->post('Password-login');
		if($user==null){
			$this->session->set_flashdata('error','username tidak boleh kosong');
			redirect(site_url('/login'));
		}elseif($password==null){
			$this->session->set_flashdata('error','password tidak boleh kosong');
			redirect(site_url('/login'));
		}else{
		$cek= $this->m_login->prosesLogin($user,$password);
		$hasil= count($cek);
		//print $hasil;
		$select=$this->db->get_where('admin',array('username'=>$user,'password'=>$password))->row();
			$data=array("logged_in"=>true,'logger'=>$select->username);
		if($hasil > 0){
			$this->session->set_userdata($data);
			redirect('/dashboard');
		}else{
			$this->session->set_flashdata('error','username atau password salah sliahkan login kembali!');
			redirect(site_url('/login'));
		}
	}
}
public function dashboard(){
$this->load->view('dashboard');
}
}       
