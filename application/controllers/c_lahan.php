<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Lahan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_lahan');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	public function lahan(){
		$data['lahan'] = $this->m_lahan->lahan()->result();
		$this->load->view('lahan_manajer',$data);
	}

	public function tambah_lahan(){
		$this->load->view('tambah_lahan');
	}

	function tambah_data_lahan(){
		$lokasi = $this->input->post('lokasi');
		$no_surat = $this->input->post('no_surat');
		$lahan = $this->input->post('lahan');

		$data = array(
			'lokasi' => $lokasi,
			'no_surat' => $no_surat,
			'lahan' => $lahan
			 );
		$this->m_lahan->tambah_data_lahan($data,'lahan');
		redirect('c_lahan/lahan');
	}

	function hapus_data_lahan($id_lahan){
		$where = array('id_lahan' => $id_lahan );
		$this->m_lahan->hapus_data_lahan($where,'lahan');
		redirect('c_lahan/lahan');
	}

	function edit_data_lahan($id_lahan){
		$where = array('id_lahan' => $id_lahan );
		$data['lahan'] = $this->m_lahan->edit_data_lahan($where,'lahan')->result();
		$this->load->view('edit_lahan',$data);
	}

	function update_data_lahan(){
		$id_lahan = $this->input->post('id_lahan');
		$lokasi = $this->input->post('lokasi');
		$no_surat = $this->input->post('no_surat');
		$lahan = $this->input->post('lahan');
 
		$data = array(
			'lokasi' => $lokasi,
			'no_surat' => $no_surat,
			'lahan' => $lahan
		);
 
		$where = array(
			'id_lahan' => $id_lahan
		);
 
		$this->m_lahan->update_data_lahan($where,$data,'lahan');
		redirect('c_lahan/lahan');
	}

}