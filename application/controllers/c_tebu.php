<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Tebu extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_tebu');
		$this->load->model('m_lahan');
		$this->load->model('m_memberpetani');
		$this->load->model('m_targetproduksi');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function tebu(){
		$data['tebu'] = $this->m_tebu->tebu()->result();
		$this->load->view('tebu_logistik',$data);
	}

	public function cari_tebu(){
		$lokasi = $this->input->post('lokasi');
		$data['tebu'] = $this->m_tebu->cari_tebu($lokasi)->result();
		$this->load->view('tebu_logistik',$data);
	}

	public function tambah_tebu(){
		$data['lahan'] = $this->m_lahan->lahan()->result();
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$data['member_petani'] = $this->m_memberpetani->member_petani()->result();
		$this->load->view('tambah_tebu',$data);
	}

	public function total_tebu(){
		$data['tebu'] = $this->m_tebu->total_tebu()->result();
		$this->load->view('totaltebu_logistik',$data);
	}

	public function totaltebu_manajer(){
		$data['tebu'] = $this->m_tebu->total_tebu()->result();
		$this->load->view('totaltebu_manajer',$data);
	}

	public function totaltebu_produksi(){
		$data['tebu'] = $this->m_tebu->total_tebu()->result();
		$this->load->view('totaltebu_produksi',$data);
	}

	function tambah_data_tebu(){
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$id_memberpetani = $this->input->post('id_memberpetani');
		$id_lahan = $this->input->post('id_lahan');

		$lokasi_b1 = $this->m_lahan->lokasi_lahan($id_lahan)->row();
		foreach ($lokasi_b1 as $lokasi_b11){
			$lokasi_b11;
		}
		$lokasi = $this->m_memberpetani->lokasi_memberpetani($id_memberpetani)->row();
		$lokasii = '';
		foreach ($lokasi as $lokasi_b){
			$lokasi_b;
		}
		if ($lokasi_b == $lokasii) {
		$lokasi_b = $lokasi_b11;
		}
		
		$lahan_b1 = $this->m_lahan->lahan_lahan($id_lahan)->row();
		foreach ($lahan_b1 as $lahan_b11){
			$lahan_b11;
		}
		$lahan = $this->m_memberpetani->lahan_memberpetani($id_memberpetani)->row();
		$lahann = 0;
		foreach ($lahan as $lahan_b){
			$lahan_b;
		}
		if ($lahan_b == $lahann) {
		$lahan_b = $lahan_b11;	
		}
			
		$tgl = $this->input->post('tgl');

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'id_memberpetani' => $id_memberpetani,
			'id_lahan' => $id_lahan,
			'lokasi' => $lokasi_b,
			'lahan' => $lahan_b,
			'tgl' => $tgl,
			'berat' => 0,
			'status' => 'Belum Terkirim'
			 );
		$this->m_tebu->tambah_data_tebu($data,'tebu');
		redirect('c_tebu/tebu');
	}

	function edit_data_tebu($id_tebu){
		$where = array('id_tebu' => $id_tebu );
		$data['tebu'] = $this->m_tebu->edit_data_tebu($where,'tebu')->result();
		$data['lahan'] = $this->m_lahan->lahan()->result();
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$data['member_petani'] = $this->m_memberpetani->member_petani()->result();
		$this->load->view('edit_tebu',$data);
	}

	function edit_statustebu($id_tebu){
		$where = array('id_tebu' => $id_tebu );
		$data['tebu'] = $this->m_tebu->edit_data_tebu($where,'tebu')->result();
		$this->load->view('edit_statustebu',$data);
	}

	function update_data_statustebu(){
		$id_tebu = $this->input->post('id_tebu');
		$berat = $this->input->post('berat');

		$data = array(
			'berat' => $berat,
			'status' => 'Terkirim'
			 );
 
		$where = array(
			'id_tebu' => $id_tebu
		);
 
		$this->m_tebu->update_data_tebu($where,$data,'tebu');
		redirect('c_tebu/tebu');
	}

	function update_data_tebu(){
		$id_tebu = $this->input->post('id_tebu');
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$id_memberpetani = $this->input->post('id_memberpetani');
		$id_lahan = $this->input->post('id_lahan');

		$lokasi_b1 = $this->m_lahan->lokasi_lahan($id_lahan)->row();
		foreach ($lokasi_b1 as $lokasi_b11){
			$lokasi_b11;
		}
		$lokasi = $this->m_memberpetani->lokasi_memberpetani($id_memberpetani)->row();
		$lokasii = '';
		foreach ($lokasi as $lokasi_b){
			$lokasi_b;
		}
		if ($lokasi_b == $lokasii) {
		$lokasi_b = $lokasi_b11;
		}
		
		$lahan_b1 = $this->m_lahan->lahan_lahan($id_lahan)->row();
		foreach ($lahan_b1 as $lahan_b11){
			$lahan_b11;
		}
		$lahan = $this->m_memberpetani->lahan_memberpetani($id_memberpetani)->row();
		$lahann = 0;
		foreach ($lahan as $lahan_b){
			$lahan_b;
		}
		if ($lahan_b == $lahann) {
		$lahan_b = $lahan_b11;	
		}
			
		$tgl = $this->input->post('tgl');

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'id_memberpetani' => $id_memberpetani,
			'id_lahan' => $id_lahan,
			'lokasi' => $lokasi_b,
			'lahan' => $lahan_b,
			'tgl' => $tgl,
			'berat' => 0,
			'status' => 'Belum Terkirim'
			 );
 
		$where = array(
			'id_tebu' => $id_tebu
		);
 
		$this->m_tebu->update_data_tebu($where,$data,'tebu');
		redirect('c_tebu/tebu');
	}

	function hapus_data_tebu($id_tebu){
		$where = array('id_tebu' => $id_tebu );
		$this->m_tebu->hapus_data_tebu($where,'tebu');
		redirect('c_tebu/tebu');
	}

}