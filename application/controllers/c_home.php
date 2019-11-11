<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_berita');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function home(){
		$data['berita'] = $this->m_berita->berita()->result();
		$this->load->view('home',$data);
	}
 
}