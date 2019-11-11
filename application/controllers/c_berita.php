<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Berita extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_berita');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	public function berita(){
		$data['berita'] = $this->m_berita->berita()->result();
		$this->load->view('berita_manajer',$data);
	}

	public function tambah_berita(){
		$this->load->view('tambah_berita');
	}

	function tambah_data_berita(){
		$gambar = $this->input->post('gambar');
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');

		$data = array(
			'gambar' => $gambar,
			'judul' => $judul,
			'berita' => $berita
			 );
		$this->m_berita->tambah_data_berita($data,'berita');
		redirect('c_berita/berita');
	}

	function hapus_data_berita($id_berita){
		$where = array('id_berita' => $id_berita );
		$this->m_berita->hapus_data_berita($where,'berita');
		redirect('c_berita/berita');
	}

	function edit_data_berita($id_berita){
		$where = array('id_berita' => $id_berita );
		$data['berita'] = $this->m_berita->edit_data_berita($where,'berita')->result();
		$this->load->view('edit_berita',$data);
	}

	function update_data_berita(){
		$id_berita = $this->input->post('id_berita');
		$gambar = $this->input->post('gambar');
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');
 
		$data = array(
			'gambar' => $gambar,
			'judul' => $judul,
			'berita' => $berita
		);
 
		$where = array(
			'id_berita' => $id_berita
		);
 
		$this->m_berita->update_data_berita($where,$data,'berita');
		redirect('c_berita/berita');
	}

}