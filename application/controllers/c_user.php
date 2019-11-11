<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_user');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	public function user(){
		$data['user'] = $this->m_user->user()->result();
		$this->load->view('user_manajer',$data);
	}

	public function tambah_user(){
		$this->load->view('tambah_user');
	}

	function tambah_data_user(){
		$nama = $this->input->post('nama');
		$hak_akses = $this->input->post('hak_akses');
		$password = $this->input->post('password');
		if ($hak_akses == 'Manajer') {
			$level = 1;
		}
		elseif ($hak_akses == 'Produksi') {
			$level = 2;
		}
		elseif ($hak_akses == 'Logistik') {
			$level = 3;
		}

		$data = array(
			'nama' => $nama,
			'hak_akses' => $hak_akses,
			'level' => $level,
			'password' => $password
			 );
		$this->m_user->tambah_data_user($data,'user');
		redirect('c_user/user');
	}

	function hapus_data_user($id_user){
		$where = array('id_user' => $id_user );
		$this->m_user->hapus_data_user($where,'user');
		redirect('c_user/user');
	}

	function edit_data_user($id_user){
		$where = array('id_user' => $id_user );
		$data['user'] = $this->m_user->edit_data_user($where,'user')->result();
		$this->load->view('edit_user',$data);
	}

	function update_data_user(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$hak_akses = $this->input->post('hak_akses');
		$password = $this->input->post('password');
		if ($hak_akses == 'Manajer') {
			$level = 1;
		}
		elseif ($hak_akses == 'Produksi') {
			$level = 2;
		}
		elseif ($hak_akses == 'Logistik') {
			$level = 3;
		}
 
		$data = array(
			'nama' => $nama,
			'hak_akses' => $hak_akses,
			'level' => $level,
			'password' => $password,
		);
 
		$where = array(
			'id_user' => $id_user
		);
 
		$this->m_user->update_data_user($where,$data,'user');
		redirect('c_user/user');
	}

}