<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Menu extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->helper('url');
		$this->load->model('m_produksi');
		$this->load->model('m_penjualan');
		$this->load->model('m_tebu');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function menu_manajer(){
		$data['produksi'] = $this->m_produksi->rekap_produksi()->result();
		$data['penjualan'] = $this->m_penjualan->rekap_penjualan()->result();
		$this->load->view('menu_manajer',$data);
	}

	public function menu_produksi(){
		$data['produksi'] = $this->m_produksi->rekap_produksi()->result();
		$data['penjualan'] = $this->m_penjualan->rekap_penjualan()->result();
		$this->load->view('menu_produksi',$data);
	}

	public function menu_logistik(){
		$data['tebu'] = $this->m_tebu->total_tebu()->result();
		$this->load->view('menu_logistik',$data);
	}
 
}