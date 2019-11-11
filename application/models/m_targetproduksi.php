<?php 
 
class M_TargetProduksi extends CI_Model{
	function target_produksi(){
		$this->db->order_by('tahun desc');
		return $this->db->get('target_produksi');
	}

	function tambah_data_targetproduksi($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_targetproduksi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_targetproduksi($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_targetproduksi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function target_limit(){
		$this->db->select('*');
		$this->db->order_by('tahun desc');
		$this->db->limit('1');
		return $this->db->get('target_produksi');
	}

	function tahun_ramal(){
		$this->db->select('tahun');
		$this->db->order_by('tahun desc');
		$this->db->limit('1');
		return $this->db->get('target_produksi');
	}
}