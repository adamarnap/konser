<?php 

class Daftar extends CI_Controller{

// controller halaman utama
function __construct()
	{
        parent::__construct();
        $this->load->model('M_daftar');
  
    }


	public function index()
	{
		$this->load->view('Daftar');
	}

	public function Proses_Daftar(){
		$id_user = $this->input->post('id_user');//deklarasi
		$username = $this->input->post('username');//deklarasi
		$nama_user = $this->input->post('nama_user');//deklarasi
		$no_tlp = $this->input->post('no_tlp');//deklarasi		
		$alamat = $this->input->post('alamat');//deklarasi
		$password = $this->input->post('password');//deklarasi
		


		$data_insert = array(
			'id_user' => $id_user,
			'username' => $username,
			'nama_user' => $nama_user,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat,
			'password' => $password);

		$this -> M_daftar->Daftar_Akun($data_insert);
		redirect('Login');


	}
}