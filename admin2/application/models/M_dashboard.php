<?php
class m_dashboard extends CI_Model {

function get_table(){
        return $this->db->get("laporan");
    }
    
	function get_laporan(){
        $query = $this->db->query("SELECT * from v_Laporan");
        return $query;
	}
	
}