<?php 
 
class M_Memberpetani extends CI_Model{
	function member_petani(){
		$this->db->order_by('lokasi asc');
		return $this->db->get('member_petani');
	}

	function tambah_data_memberpetani($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_memberpetani($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_memberpetani($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_memberpetani($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function lokasi_memberpetani($id_memberpetani){
		$this->db->select('lokasi');
		$this->db->where('id_memberpetani',$id_memberpetani);
		return $this->db->get('member_petani');
	}

	function lahan_memberpetani($id_memberpetani){
		$this->db->select('lahan');
		$this->db->where('id_memberpetani',$id_memberpetani);
		return $this->db->get('member_petani');
	}

	function total_lahan(){
		$this->db->select('SUM(lahan) as total_lahan');
		return $this->db->get('member_petani');
	}
}