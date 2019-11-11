<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Targetproduksi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_targetproduksi');
		$this->load->model('m_lahan');
		$this->load->model('m_ramal');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function target_produksi(){
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$data['ramal_ar'] = $this->m_ramal->limit_ar()->result();
		$data['ramal_ma'] = $this->m_ramal->limit_ma()->result();
		$data['ramal_arma'] = $this->m_ramal->limit_arma()->result();
		$data['tahun'] = $this->m_ramal->limit_tahun()->result();
		$this->load->view('targetproduksi_manajer',$data);
	}

	public function tambah_targetproduksi(){
		$data['lahan'] = $this->m_lahan->lahan()->result();
		$this->load->view('tambah_targetproduksi',$data);
	}

	function tambah_data_targetproduksi(){
		$tahun = $this->input->post('tahun');
		$target_produksi = $this->input->post('target_produksi');

		$data = array(
			'tahun' => $tahun,
			'target_produksi' => $target_produksi,
			'berat' => ($target_produksi/7)*100,

			'lahan' => ((($target_produksi/7)*100) / 60) 

			 );
		$this->m_targetproduksi->tambah_data_targetproduksi($data,'target_produksi');
		redirect('c_targetproduksi/target_produksi');
	}

	function hapus_data_targetproduksi($id_targetproduksi){
		$where = array('id_targetproduksi' => $id_targetproduksi );
		$this->m_targetproduksi->hapus_data_targetproduksi($where,'target_produksi');
		redirect('c_targetproduksi/target_produksi');
	}

	function edit_data_targetproduksi($id_targetproduksi){
		$where = array('id_targetproduksi' => $id_targetproduksi );
		$data['target_produksi'] = $this->m_targetproduksi->edit_data_targetproduksi($where,'target_produksi')->result();
		$data['lahan'] = $this->m_lahan->lahan()->result();
		$this->load->view('edit_targetproduksi',$data);
	}

	function update_data_targetproduksi(){
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$tahun = $this->input->post('tahun');
		$target_produksi = $this->input->post('target_produksi');

		$data = array(
			'tahun' => $tahun,
			'target_produksi' => $target_produksi,
			'berat' => ($target_produksi/7)*100,
			'lahan' => ((($target_produksi/7)*100) / 60)
			 );
 
		$where = array(
			'id_targetproduksi' => $id_targetproduksi
		);
 
		$this->m_targetproduksi->update_data_targetproduksi($where,$data,'target_produksi');
		redirect('c_targetproduksi/target_produksi');
	}

}