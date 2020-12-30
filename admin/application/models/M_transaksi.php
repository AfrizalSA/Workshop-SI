<?php
class M_transaksi extends CI_Model {

	function get_barang(){
        $query = $this->db->query("SELECT a.IDPESANAN,a.NAMA,a.TOTAL_HARGA,a.TGL_TRANSAKSI,count(b.ID_DETAIL_PESANAN) as jumlah from pesanan a left join detail_pesanan b on b.ID_PESANAN=a.IDPESANAN group by IDPESANAN");
        return $query;
	}
	function get_detail(){
        $query = $this->db->query("SELECT * from pesanan");
        return $query;
	}
	public function getbarang($value)
	{
		$query=$this->db->query("select * from barang where kodebarang like '%$value%' or namabarang like '%$value%' ");
		return $query->result();
	}
	public function save($value,$value2)
	{
		$this->db->trans_begin();
		$this->db->insert('pesanan',$value);
		$idpesanan=$this->db->insert_id();
		foreach($value2 as $data_multi){
			$data=array(
				'ID_PESANAN'=>$idpesanan,
				'KODE_BARANG'=>$data_multi['idbarang_multi'],
				'JUMLAH_BARANG'=>$data_multi['jumlah_multi'],
				'created_at'=>date('Y-m-d H:i')
			);
			$this->db->insert('detail_pesanan',$data);
			$getsisa=$this->db->query("select jumlah from barang where idbarang='".$data_multi['idbarang_multi']."' ")->row()->jumlah;
			$sisa=array('jumlah'=>($getsisa-$data_multi['jumlah_multi']));
			$this->db->where('idbarang',$data_multi['idbarang_multi']);
			$this->db->update('barang',$sisa);
		}
		$laporan=array(
			'KODE_PESANAN'=>$idpesanan,
			'TGL_LAPORAN'=>date('Y-m-d H:i')
		);
		$this->db->insert('header_laporan',$laporan);
			
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}else{
			 $this->db->trans_commit();
			 return true;
		}
	}
	public function edit1($value)
	{
		$this->db->where('IDPESANAN',$value);
		$get=$this->db->get('pesanan');
		return $get->result();
	}
	public function edit2($value)
	{
		$query=$this->db->query("select b.namabarang,b.hargajual,a.JUMLAH_BARANG from detail_pesanan a left join barang b on b.idbarang=a.KODE_BARANG where a.ID_PESANAN='$value'");
		return $query->result();
	}
	
}