<?php 
 
class M_Tebu extends CI_Model{
	function tebu(){
		$this->db->select('tebu.*, target_produksi.tahun');
		$this->db->join('target_produksi','tebu.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->order_by('tebu.tgl desc');
		return $this->db->get('tebu');
	}

	function cari_tebu($lokasi){
		$this->db->select('*');
		$this->db->join('target_produksi','tebu.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->where('lokasi',$lokasi);
		$this->db->order_by('tebu.tgl desc');
		return $this->db->get('tebu');
	}

	function tambah_data_tebu($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_tebu($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_tebu($where,$table){
		$this->db->select('tebu.*, target_produksi.tahun');
		$this->db->join('target_produksi','tebu.id_targetproduksi = target_produksi.id_targetproduksi');
		return $this->db->get_where($table,$where);
	}

	function update_data_tebu($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function total_tebu(){
		$this->db->select('target_produksi.*, SUM(tebu.berat) as total_berat, SUM(tebu.lahan) as total_lahan');
		$this->db->join('target_produksi','tebu.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->group_by('target_produksi.tahun');
		$this->db->order_by('target_produksi.tahun desc');
		return $this->db->get('tebu');
	}
}