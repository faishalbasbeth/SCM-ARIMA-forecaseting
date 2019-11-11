<?php 
 
class M_Lahan extends CI_Model{
	function lahan(){
		return $this->db->get('lahan');
	}

	function tambah_data_lahan($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_lahan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_lahan($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_lahan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function total_lahanp(){
		$this->db->select('SUM(lahan) as total_lahanp');
		return $this->db->get('lahan');
	}

	function lokasi_lahan($id_lahan){
		$this->db->select('lokasi');
		$this->db->where('id_lahan',$id_lahan);
		return $this->db->get('lahan');
	}

	function lahan_lahan($id_lahan){
		$this->db->select('lahan');
		$this->db->where('id_lahan',$id_lahan);
		return $this->db->get('lahan');
	}
}