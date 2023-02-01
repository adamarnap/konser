<?php 

class Halut extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_toko');
		$this->load->model('M_tiket');
		$this->load->model('M_order');
		$this->load->model('M_detail');
		$this->load->library('session');
		$this->load->library('session');
	}

// controller halaman utama
    public function index()
	{
		$data['tiket'] = $this->M_tiket->get_all_produk_terbaru()->result();
		$data['user'] = $this->M_user->Tampil_user('user')->result();
		$this->load->view('Halut',$data);
	}
}