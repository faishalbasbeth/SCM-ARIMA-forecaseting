<?php 
 
class M_Ramal extends CI_Model{
	function ramal(){
		$this->db->order_by('id_ramal desc');
		return $this->db->get('ramal');
	}

	function tambah_data_ramal($data,$table){
		$this->db->insert($table,$data);
	}

	function limit_tahun(){
		$this->db->select('tahun');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function limit_ar(){
		$this->db->select('ramal_ar');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function limit_ma(){
		$this->db->select('ramal_ma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function limit_arma(){
		$this->db->select('ramal_arma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function mape_ar(){
		$this->db->select('mape_ar');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function mape_ma(){
		$this->db->select('mape_ma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function mape_arma(){
		$this->db->select('mape_arma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function error_ar(){
		$this->db->select('error_ar');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function error_ma(){
		$this->db->select('error_ma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function error_arma(){
		$this->db->select('error_arma');
		$this->db->order_by('id_ramal desc');
		$this->db->limit('1');
		return $this->db->get('ramal');
	}

	function update_data_ramal($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}