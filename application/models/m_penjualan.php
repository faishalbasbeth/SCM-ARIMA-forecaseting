<?php 
 
class M_Penjualan extends CI_Model{

	function penjualan(){
		$this->db->select('penjualan.*,target_produksi.tahun');
		$this->db->join('target_produksi','penjualan.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->order_by('target_produksi.tahun desc');
		return $this->db->get('penjualan');
	}

	function tambah_data_penjualan($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_penjualan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_penjualan($where,$table){
		$this->db->select('penjualan.*,target_produksi.tahun');
		$this->db->join('target_produksi','penjualan.id_targetproduksi = target_produksi.id_targetproduksi');
		return $this->db->get_where($table,$where);
	}

	function update_data_penjualan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function rekap_penjualan(){
		$this->db->select('penjualan.*,target_produksi.tahun,produksi.produksi,sum(penjualan.berat) as total_berat,(produksi.produksi - sum(penjualan.berat)) as sisa');
		$this->db->join('target_produksi','penjualan.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->join('produksi','produksi.id_targetproduksi = target_produksi.id_targetproduksi');
		$this->db->group_by('target_produksi.tahun');
		$this->db->order_by('target_produksi.tahun desc');
		return $this->db->get('penjualan');
	}
}