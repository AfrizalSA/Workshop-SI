<?php

class barang extends CI_Controller {

	public function __Construct() {
        parent::__Construct();
      	$this->load->model('m_barang');
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
         'nama_menu'=>'Barang',
         'data'=> $this->m_barang->get_barang(),           
 		);
        //$data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('barang',$data);
	}
    public function save()
    {
        $idne=$this->input->get('idbarang');
        $action=$this->input->get('act');
        $data=array(
            'kodebarang'=>$this->input->get('KODEBARANG'),
            'namabarang'=>$this->input->get('NAMABARANG'),
            'hargasatuan'=>$this->input->get('HARGABELI'),
            'hargajual'=>$this->input->get('HARGAJUAL'),
            'jumlah'=>$this->input->get('JUMLAH'),//$this->input->post('supp_id'),
        );
        if($idne==null){
            //$this->db->set('created_at',date('Y-m-d'),false);//$session['id'];
            $gas=$this->m_barang->add($data);
            $msg='menambahkan';
        }else if($action=="edit"){//$session['id'];
            $gas=$this->m_barang->update($idne,$data);
            $msg='meng-update';
        }else{
            $gas=$this->m_barang->delete($idne);
            $msg='menghapus';
        }
        if($gas===true){
            echo '1||sukses '.$msg.' data';
        }else{
            echo '0||error silahkan hubungi admin';
        } 
    }
    public function dataedit()
    {
        echo json_encode($this->m_barang->edit($this->input->post('idne')));
    }
	
}

