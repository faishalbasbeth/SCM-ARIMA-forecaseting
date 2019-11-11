<?php 
 
class M_User extends CI_Model{
	function user(){
		return $this->db->get('user');
	}

	function tambah_data_user($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_user($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}