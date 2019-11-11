<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Penjualan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_targetproduksi');
		$this->load->model('m_penjualan');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	public function penjualan(){
		$data['penjualan'] = $this->m_penjualan->penjualan()->result();
		$this->load->view('penjualan_produksi',$data);
	}

	public function tambah_penjualan(){
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$this->load->view('tambah_penjualan',$data);
	}

	public function rekap_penjualan(){
		$data['penjualan'] = $this->m_penjualan->rekap_penjualan()->result();
		$this->load->view('rekappenjualan_produksi',$data);
	}

	public function rekappenjualan_manajer(){
		$data['penjualan'] = $this->m_penjualan->rekap_penjualan()->result();
		$this->load->view('rekappenjualan_manajer',$data);
	}

	function tambah_data_penjualan(){
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl');
		$berat = $this->input->post('berat');

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl' => $tgl,
			'berat' => $berat
			 );
		$this->m_penjualan->tambah_data_penjualan($data,'penjualan');
		redirect('c_penjualan/penjualan');
	}

	function hapus_data_penjualan($id_penjualan){
		$where = array('id_penjualan' => $id_penjualan );
		$this->m_penjualan->hapus_data_penjualan($where,'penjualan');
		redirect('c_penjualan/penjualan');
	}

	function edit_data_penjualan($id_penjualan){
		$where = array('id_penjualan' => $id_penjualan );
		$data['penjualan'] = $this->m_penjualan->edit_data_penjualan($where,'penjualan')->result();
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$this->load->view('edit_penjualan',$data);
	}

	function update_data_penjualan(){
		$id_penjualan = $this->input->post('id_penjualan');
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tgl = $this->input->post('tgl');
		$berat = $this->input->post('berat');

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl' => $tgl,
			'berat' => $berat
			 );
 
		$where = array(
			'id_penjualan' => $id_penjualan
		);
 
		$this->m_penjualan->update_data_penjualan($where,$data,'penjualan');
		redirect('c_penjualan/penjualan');
	}

}