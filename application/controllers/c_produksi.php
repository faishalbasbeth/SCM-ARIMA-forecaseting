<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Produksi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_produksi');
		$this->load->model('m_targetproduksi');
		$this->load->model('m_ramal');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
	public function produksi(){
		$data['produksi'] = $this->m_produksi->produksi()->result();
    $data['target_produksi'] = $this->m_targetproduksi->target_limit()->result();
		$this->load->view('produksi_produksi',$data);
	}

	public function tambah_produksi(){
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$data['produksi'] = $this->m_produksi->produksi()->result();
		$data['limit_p1'] = $this->m_produksi->limit_p1()->row();
		$this->load->view('tambah_produksi',$data);
	}

	public function rekap_produksi(){
		$data['produksi'] = $this->m_produksi->rekap_produksi()->result();
		$this->load->view('rekapproduksi_produksi',$data);
	}

	public function rekapproduksi_manajer(){
		$data['produksi'] = $this->m_produksi->rekap_produksi()->result();
		$this->load->view('rekapproduksi_manajer',$data);
	}

	function tambah_data_produksi(){
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$produksi = $this->input->post('produksi');
		$satu = $this->m_produksi->satu()->row();
		foreach ($satu as $satu1) {
              $satu1;
              }
        $satu_a = $satu1 +1;

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'produksi' => $produksi,
			'produksi1' => $satu_a,
			'vm' => 1
			 );
		$this->m_produksi->tambah_data_produksi($data,'produksi');

		$limit_p1 = $this->m_produksi->limit_p1()->row();
		foreach ($limit_p1 as $limit_p11) {
              $limit_p11;
              }

		$data = array(
			'produksi1' => $limit_p11,
			 );
 
		$where = array(
			'produksi1' => $satu1
		);
 
		$this->m_produksi->update_data_produksi($where,$data,'produksi');

		$tp = array($this->m_produksi->tp()->result());
		foreach ($tp as $au) {
              $au;
              }
              $z = array();
 
              $jum0 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z[0] = $au[$i]->vm * $au[$i]->vm;
                $a = $jum0 += $z[0];
              }
              // echo $a."<br>";
              $jum1 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z[1] = $au[$i]->vm * $au[$i]->produksi;
                $b = $jum1 += $z[1];
              }
              // echo $b."<br>";
              $jum2 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z[2] = $au[$i]->produksi * $au[$i]->vm;
                $c = $jum2 += $z[2];
              }
              // echo $c."<br>";
              $jum3 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z[3] = $au[$i]->produksi * $au[$i]->produksi;
                $d = $jum3 += $z[3];
              }
              // echo $d."<br>";
              // ------------------------------------------------
              $jum4 = 0;
              for ($i=1; $i < count($au); $i++) {
                $z[4] = $au[$i]->vm * $au[$i]->produksi;
                $e = $jum4 += $z[4];
              }
              // echo $e."<br>";
              $jum5 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z[5] = $au[$i]->produksi * $au[$i]->produksi1;
                $f = $jum5 += $z[5];
              }
              // echo $f."<br>";
              // -----------------------------------------------------
              $y = array();
              $y[0] = $d;
              $y[1] = $b*(-1);
              $y[2] = $c*(-1);
              $y[3] = $a;
              $invers = 1/(($y[3]*$y[0])-($y[1]*$y[2]));
              $yt[0] = $y[0] * $invers;
              $yt[1] = $y[1] * $invers;
              $yt[2] = $y[2] * $invers;
              $yt[3] = $y[3] * $invers;
              // echo $yt[0]."<br>";
              // echo $yt[1]."<br>";
              // echo $yt[2]."<br>";
              // echo $yt[3]."<br>";
              // -----------------------------------------------------
              $pm = array();
              $pm[0] = ($yt[0]*$e)+($yt[1]*$f);
              $pm[1] = ($yt[2]*$e)+($yt[3]*$f);
              // echo $pm[0]."<br>";
              // echo $pm[1]."<br>";
              // ------------------------------------------------------------
              $hasil = ($pm[0]+($pm[1]*$limit_p11))+0;
              // echo "AR = ".$hasil."<br>";
              // -------------------------------------------------------

              $z1 = array();
              $jum6 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z1[0] = $au[$i]->vm * $au[$i]->vm;
                $aa = $jum6 += $z1[0];
              }
              // echo $aa."<br>";
              $jum7 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z1[1] = $au[$i]->vm * ($au[$i]->produksi-$au[$i]->produksi1);
                $bb = $jum7 += $z1[1];
              }
              // echo $bb."<br>";
              $jum8 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z1[2] = ($au[$i]->produksi-$au[$i]->produksi1) * $au[$i]->vm;
                $cc = $jum8 += $z1[2];
              }
              // echo $cc."<br>";
              $jum9 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z1[3] = ($au[$i]->produksi-$au[$i]->produksi1) * ($au[$i]->produksi-$au[$i]->produksi1);
                $dd = $jum9 += $z1[3];
              }
              // echo $dd."<br>";
              // ------------------------------------------------
              $jum10 = 0;
              for ($i=1; $i < count($au); $i++) {
                $z1[4] = $au[$i]->vm * $au[$i]->produksi;
                $ee = $jum10 += $z1[4];
              }
              // echo $ee."<br>";
              $jum11 = 0;
              for ($i=0; $i < count($au)-1; $i++) {
                $z1[5] = ($au[$i]->produksi-$au[$i]->produksi1) * $au[$i]->produksi1;
                $ff = $jum11 += $z1[5];
              }
              // echo $ff."<br>";
              // -----------------------------------------------------
              $yy = array();
              $yy[0] = $dd;
              $yy[1] = $bb*(-1);
              $yy[2] = $cc*(-1);
              $yy[3] = $aa;
              $invers = 1/(($yy[3]*$yy[0])-($yy[1]*$yy[2]));
              $yt1[0] = $yy[0] * $invers;
              $yt1[1] = $yy[1] * $invers;
              $yt1[2] = $yy[2] * $invers;
              $yt1[3] = $yy[3] * $invers;
              // echo $yt1[0]."<br>";
              // echo $yt1[1]."<br>";
              // echo $yt1[2]."<br>";
              // echo $yt1[3]."<br>";
              // -----------------------------------------------------
              $pm1 = array();
              $pm1[0] = ($yt1[0]*$ee)+($yt1[1]*$ff);
              $pm1[1] = ($yt1[2]*$ee)+($yt1[3]*$ff);
              // echo $pm1[0]."<br>";
              // echo $pm1[1]."<br>";
              // ------------------------------------------------------------
              $error_ar = $this->m_ramal->error_ar()->row();
              foreach ($error_ar as $error_ar1) {
              $error_ar1;
              }

              $error_ma = $this->m_ramal->error_ma()->row();
              foreach ($error_ma as $error_ma1) {
              $error_ma1;
              }

              $error_arma = $this->m_ramal->error_arma()->row();
              foreach ($error_arma as $error_arma1) {
              $error_arma1;
              }

              $limit_ar = $this->m_ramal->limit_ar()->row();
              foreach ($limit_ar as $limit_ar1) {
                $limit_ar1;
              }

              $limit_ma = $this->m_ramal->limit_ma()->row();
              foreach ($limit_ma as $limit_ma1) {
                $limit_ma1;
              }

              $limit_arma = $this->m_ramal->limit_arma()->row();
              foreach ($limit_arma as $limit_arma1) {
                $limit_arma1;
              }

              $error_ar11 =  $limit_p11-$limit_ar1;
              $error_ma11 =  $limit_p11-$limit_ma1;
              $error_arma11 =  $limit_p11-$limit_arma1;

              $hasil1 = (($pm1[0]+0)-($pm1[1]*($error_ma11)));
              // echo "MA = ".$hasil1."<br>";
              // -------------------------------------------------------------
              $hasil2 = (($pm[0]+($pm[1]*$limit_p11)))+((0-($pm1[1]*($error_arma11))));
              // echo "ARMA = ".$hasil2."<br>";

    $tahun_produksi = $this->m_targetproduksi->tahun_ramal()->row();
    foreach ($tahun_produksi as $tahun_produksi1) {
              $tahun_produksi1;
              }
    $tahun_produksi1_a = $tahun_produksi1 +1;
    $id_produksiramal = $this->m_produksi->id_produksiramal()->row();
    foreach ($id_produksiramal as $id_produksiramal1) {
              $id_produksiramal1;
              }

		$data = array(
      'id_produksi' => $id_produksiramal1,
			'tahun' => $tahun_produksi1_a,
			'ramal_ar' => $hasil,
      'mape_ar' => 0,
      'error_ar' => 0,
      'ramal_ma' => $hasil1,
      'mape_ma' => 0,
      'error_ma' => 0,
      'ramal_arma' => $hasil2,
      'mape_arma' => 0,
      'error_arma' => 0
			 );
		$this->m_ramal->tambah_data_ramal($data,'ramal');

    $mape_ar = (($limit_p11-$limit_ar1)/$limit_ar1)*100;
    $mape_ma = (($limit_p11-$limit_ma1)/$limit_ma1)*100;
    $mape_arma = (($limit_p11-$limit_arma1)/$limit_arma1)*100;

    $data = array(
      'mape_ar' => $mape_ar,
      'error_ar' => $error_ar11,
      'mape_ma' => $mape_ma,
      'error_ma' => $error_ma11,
      'mape_arma' => $mape_arma,
      'error_arma' => $error_arma11,
       );
 
    $where = array(
      'ramal_ar' => $limit_ar1
    );
 
    $this->m_ramal->update_data_ramal($where,$data,'ramal');
		redirect('c_produksi/produksi');
	}

	function hapus_data_produksi($id_produksi){
		$where = array('id_produksi' => $id_produksi );
		$this->m_produksi->hapus_data_produksi($where,'produksi');
		redirect('c_produksi/produksi');
	}

	function edit_data_produksi($id_produksi){
		$where = array('id_produksi' => $id_produksi );
		$data['produksi'] = $this->m_produksi->edit_data_produksi($where,'produksi')->result();
		$data['target_produksi'] = $this->m_targetproduksi->target_produksi()->result();
		$this->load->view('edit_produksi',$data);
	}

	function update_data_produksi(){
		$id_produksi = $this->input->post('id_produksi');
    $editproduksi1 = $id_produksi;
    $edit_produksi1 = $this->m_produksi->edit_produksi1($editproduksi1)->row();
    foreach ($edit_produksi1 as $edit_produksi11) {
      $edit_produksi11;
    }
		$id_targetproduksi = $this->input->post('id_targetproduksi');
		$produksi = $this->input->post('produksi');

		$data = array(
			'id_targetproduksi' => $id_targetproduksi,
			'produksi' => $produksi
			 );
 
		$where = array(
			'id_produksi' => $id_produksi
		);
 
		$this->m_produksi->update_data_produksi($where,$data,'produksi');

    $data = array(
      'produksi1' => $produksi
       );
 
    $where = array(
      'produksi1' => $edit_produksi11
    );
 
    $this->m_produksi->update_data_produksi($where,$data,'produksi');
		redirect('c_produksi/produksi');
	}

}