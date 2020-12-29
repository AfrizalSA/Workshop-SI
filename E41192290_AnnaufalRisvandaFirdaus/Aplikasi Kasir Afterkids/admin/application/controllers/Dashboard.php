<?php

class dashboard extends CI_Controller {

	public function __Construct() {
        parent::__Construct();
      	$this->load->model('m_dashboard');
       if(!$this->session->userdata('logger')) {
            redirect('login');
        }
    }
	public function index()
	{
		//$data1 = array(
		//		'data'=>$this->Dashboard_model->get_data());
		//$this->load->view('App/list_mhs',['data' => $data]);

		//$this->load->view('dashboard',$data1);
		
        $data=array(
         'header'=>'header',
         'sidebar'=>'sidebar',
         'footer'=>'footer', 
         'nama_menu'=>'Dashboard',
         'data'=> $this->m_dashboard->get_laporan(),           
 		);
        //$data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('dashboard',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/login');
	}
}

