<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Beritatampil extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	function berita_tampil($id_berita){
		$where = array('id_berita' => $id_berita );
		$data['berita'] = $this->m_berita->edit_data_berita($where,'berita')->result();
		$this->load->view('berita_tampil',$data);
	}

}