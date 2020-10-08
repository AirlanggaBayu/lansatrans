<?php 
 
class m_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('pemesanan');
	}
}