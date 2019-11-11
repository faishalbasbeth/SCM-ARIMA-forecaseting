<?php 
 
class M_Produksi extends CI_Model{
	function produksi(){
		$this->db->select('produksi.*,target_produksi.tahun');
		$this->db->join('target_produksi','target_produksi.id_targetproduksi = produksi.id_targetproduksi');
		$this->db->order_by('target_produksi.tahun desc');
		return $this->db->get('produksi');
	}

	function rekap_produksi(){
		$this->db->select('produksi.*,target_produksi.tahun, SUM(tebu.berat) as total_berat, SUM(tebu.lahan) as total_lahan, target_produksi.berat, target_produksi.lahan');
		$this->db->join('target_produksi','target_produksi.id_targetproduksi = produksi.id_targetproduksi');
		$this->db->join('tebu','target_produksi.id_targetproduksi = tebu.id_targetproduksi');
		$this->db->group_by('target_produksi.tahun');
		$this->db->order_by('target_produksi.tahun desc');
		return $this->db->get('produksi');
	}

	function tambah_data_produksi($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_produksi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_produksi($where,$table){
		$this->db->select('produksi.*,target_produksi.tahun');
		$this->db->join('target_produksi','target_produksi.id_targetproduksi = produksi.id_targetproduksi');
		return $this->db->get_where($table,$where);
	}

	function update_data_produksi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_produksi1($editproduksi1){
		$this->db->select('produksi.produksi');
		$this->db->join('target_produksi','target_produksi.id_targetproduksi = produksi.id_targetproduksi');
		$this->db->where('id_produksi',$editproduksi1);
		return $this->db->get('produksi');
	}

	function tp(){
		$this->db->select('*');
		return $this->db->get('produksi');
	}

	function limit_p1(){
		$this->db->select('produksi');
		$this->db->order_by('id_produksi desc');
		$this->db->limit('1');
		return $this->db->get('produksi');
	}

	function satu(){
		$this->db->select('produksi1');
		$this->db->order_by('id_produksi desc');
		$this->db->limit('1');
		return $this->db->get('produksi');
	}

	function id_produksiramal(){
		$this->db->select('id_produksi');
		$this->db->order_by('id_produksi desc');
		$this->db->limit('1');
		return $this->db->get('produksi');
	}
}