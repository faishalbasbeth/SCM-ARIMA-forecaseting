<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Memberpetani extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_memberpetani');
		$this->load->model('m_targetproduksi');
		$this->load->model('m_lahan');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function member_petani(){
		$data['total_lahanp'] = $this->m_lahan->total_lahanp()->result();
		$data['target_limit'] = $this->m_targetproduksi->target_limit()->result();
		$data['total_lahan'] = $this->m_memberpetani->total_lahan()->result();
		$data['member_petani'] = $this->m_memberpetani->member_petani()->result();
		$this->load->view('memberpetani_logistik',$data);
	}

	public function tambah_memberpetani(){
		$this->load->view('tambah_memberpetani');
	}

	function tambah_data_memberpetani(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$lokasi = $this->input->post('lokasi');
		$nik = $this->input->post('nik');
		$no_hp = $this->input->post('no_hp');
		$lahan = $this->input->post('lahan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'lokasi' => $lokasi,
			'nik' => $nik,
			'no_hp' => $no_hp,
			'lahan' => $lahan 
			 );
		$this->m_memberpetani->tambah_data_memberpetani($data,'member_petani');
		redirect('c_memberpetani/member_petani');
	}

	function edit_data_memberpetani($id_memberpetani){
		$where = array('id_memberpetani' => $id_memberpetani );
		$data['member_petani'] = $this->m_memberpetani->edit_data_memberpetani($where,'member_petani')->result();
		$this->load->view('edit_memberpetani',$data);
	}

	function update_data_memberpetani(){
		$id_memberpetani = $this->input->post('id_memberpetani');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$lokasi = $this->input->post('lokasi');
		$nik = $this->input->post('nik');
		$no_hp = $this->input->post('no_hp');
		$lahan = $this->input->post('lahan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'lokasi' => $lokasi,
			'nik' => $nik,
			'no_hp' => $no_hp,
			'lahan' => $lahan
		);
 
		$where = array(
			'id_memberpetani' => $id_memberpetani
		);
 
		$this->m_memberpetani->update_data_memberpetani($where,$data,'member_petani');
		redirect('c_memberpetani/member_petani');
	}

	function hapus_data_memberpetani($id_memberpetani){
		$where = array('id_memberpetani' => $id_memberpetani );
		$this->m_memberpetani->hapus_data_memberpetani($where,'member_petani');
		redirect('c_memberpetani/member_petani');
	}
}