<?php

class transaksi extends CI_Controller {

	public function __Construct() {
        parent::__Construct();
      	$this->load->model('m_transaksi');
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
         'nama_menu'=>'Transaksi',
         'data'=> $this->m_transaksi->get_barang(),           
 		);
        //$data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('transaksi',$data);
	}
    public function save()
    {
        $multi = $this->input->post('multi');
        $data=array(
            'NAMA'=>$this->input->post('NAMA'),
            'TOTAL_HARGA'=>$this->input->post('total'),
            'TGL_TRANSAKSI'=>date('Y-m-d H:i'));
        $simpan=$this->m_transaksi->save($data,$multi);
        echo $simpan;
    }
    public function getbarang()
    {
        $get=$this->m_transaksi->getbarang($this->input->get('term'));
        echo json_encode($get);
    }
    public function dataedit()
    {
         $get=$this->m_transaksi->edit1($this->input->post('idne'));
        echo json_encode($get);
    }
    public function dataeditt()
    {
         $get=$this->m_transaksi->edit2($this->input->post('idnya'));
        echo json_encode($get);
    }
	
}

