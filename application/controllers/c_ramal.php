<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Ramal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("c_signin/signin"));
		}
		$this->load->model('m_ramal');
        $this->load->helper('url');
		
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }

	public function ramal(){
		$data['ramal'] = $this->m_ramal->ramal()->result();
		$this->load->view('ramal_manajer',$data);
	}

	// public function tambah_ramal(){
	// 	$this->load->view('tambah_ramal');
	// }

	// function tambah_data_ramal(){
	// 	$tahun = $this->input->post('tahun');
	// 	$tp = $this->m_produksi->tp()->row();
	// 	foreach ($tp as $tp1){
	// 		$tp1;
	// 	}

	// 	$a = array();
	// 	$a[0] = 1;$a[1] = 1;
	// 	$a[2] = 17226;$a[3] = 19000;

	// 	$b = array();
	// 	$b[0] = 1;$b[1] = 17226;
	// 	$b[2] = 1;$b[3] = 19000;

	// 	$b1 = array();
	// 	$b1[0] = 19000;
	// 	$b1[1] = 20000;

	// 	$c = array();
	// 	$c[0] = ($a[0]*$b[0])+($a[1]*$b[2]);
	// 	$c[1] = ($a[0]*$b[1])+($a[1]*$b[3]);
	// 	$c[2] = ($a[2]*$b[0])+($a[3]*$b[2]);
	// 	$c[3] = ($a[2]*$b[1])+($a[3]*$b[3]);

	// 	$d = array();
	// 	$d[0] = ($a[0]*$b1[0])+($a[1]*$b1[1]);
	// 	$d[1] = ($a[2]*$b1[0])+($a[3]*$b1[1]);

	// 	$e = array();
	// 	$e[0] = $c[3];
	// 	$e[1] = $c[1]*(-1);
	// 	$e[2] = $c[2]*(-1);
	// 	$e[3] = $c[0];

	// 	$invers = 1/(($e[3]*$e[0])-($e[1]*$e[2]));

	// 	$et[0] = ($e[0]*$invers);
	// 	$et[1] = ($e[1]*$invers);
	// 	$et[2] = ($e[2]*$invers);
	// 	$et[3] = ($e[3]*$invers);

	// 	$f = array();
	// 	$f[0] = ($et[0]*$d[0])+($et[1]*$d[1]);
	// 	$f[1] = ($et[2]*$d[0])+($et[3]*$d[1]);

	// 	$ft = ($f[0]+($f[1]*20000))+0;

	// 	$data = array(
	// 		'tahun' => $tahun,
	// 		'ramal_ar' => $ft
	// 		 );
	// 	$this->m_ramal->tambah_data_ramal($data,'ramal');
	// 	redirect('c_ramal/ramal');
	// }

	// function hapus_data_ramal($id_ramal){
	// 	$where = array('id_ramal' => $id_ramal );
	// 	$this->m_ramal->hapus_data_ramal($where,'ramal');
	// 	redirect('c_ramal/ramal');
	// }

	// function edit_data_lahan($id_lahan){
	// 	$where = array('id_lahan' => $id_lahan );
	// 	$data['lahan'] = $this->m_lahan->edit_data_lahan($where,'lahan')->result();
	// 	$this->load->view('edit_lahan',$data);
	// }

	// function update_data_lahan(){
	// 	$id_lahan = $this->input->post('id_lahan');
	// 	$lokasi = $this->input->post('lokasi');
	// 	$no_surat = $this->input->post('no_surat');
	// 	$lahan = $this->input->post('lahan');
 
	// 	$data = array(
	// 		'nama' => 'PTPN XI PG SEMBORO JEMBER',
	// 		'alamat' => 'Rejoagung, Semboro, Jember Regency',
	// 		'lokasi' => $lokasi,
	// 		'no_surat' => $no_surat,
	// 		'lahan' => $lahan
	// 	);
 
	// 	$where = array(
	// 		'id_lahan' => $id_lahan
	// 	);
 
	// 	$this->m_lahan->update_data_lahan($where,$data,'lahan');
	// 	redirect('c_lahan/lahan');
	// }

}