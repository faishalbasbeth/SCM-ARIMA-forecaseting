<?php 
 
class M_Berita extends CI_Model{
	function berita(){
		return $this->db->get('berita');
	}

	function tambah_data_berita($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_berita($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_berita($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_berita($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}