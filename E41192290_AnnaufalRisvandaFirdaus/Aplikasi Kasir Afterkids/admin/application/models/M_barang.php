<?php
class m_barang extends CI_Model {

	function get_barang(){
        $query = $this->db->query("SELECT * from barang");
        return $query;
	}
		public function add($value)
	{	
		$query=$this->db->insert('barang',$value);
		return $query;
	}
	public function update($id,$value)
	{
		$this->db->where('idbarang',$id);
		$query=$this->db->update('barang',$value);
		return $query;
	}
	public function delete($id)
	{
		$this->db->where('idbarang',$id);
		$query=$this->db->delete('barang');
		return $query;
	}
	public function edit($value)
	{
		$query = $this->db->query("SELECT * from barang where idbarang='$value' ");
        return $query->result();
	}
	
}