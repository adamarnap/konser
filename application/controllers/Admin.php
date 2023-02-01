<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_toko');
		$this->load->model('M_tiket');
		$this->load->model('M_order');
		$this->load->model('M_detail');
		$this->load->model('M_daftar');
		$this->load->library('session');

		if($this->session->userdata('level')!='admin'){
            redirect('Login','refresh');
            }
	}

// controller halaman utama
//untuk load halaman utama
    public function index()
	{
	
		$data['tiket'] = $this->M_tiket->get_all_produk_terbaru()->result();
		$data['user'] = $this->M_user->Tampil_user('user')->result();
		$this->template->load('Layout_Admin','Admin/Dashboard',$data);
	}


    public function Kelola_Akun()
	{	
		$data['user'] = $this->M_user->Tampil_user('user')->result();
		$this->template->load('Layout_Admin','Admin/Kelola_Akun',$data);
	}

	public function Tambah_Akun()
	{	
		$this->template->load('Layout_Admin','Admin/Tambah_Akun');
	}

	public function Proses_Tambah()
	{	
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
		redirect('Admin/Kelola_Akun');
	}

	public function Getid_User($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_user->Edit_data_user($where,'user')->result();
		
		$this->template->load('Layout_Admin','Admin/Form_edit_user',$data);
	}

	public function Proses_Edit_User()
	{
		$id_user = $this->input->post('id_user');//deklarasi
		$username = $this->input->post('username');//deklarasi
		$nama_user = $this->input->post('nama_user');//deklarasi
		$no_tlp = $this->input->post('no_tlp');//deklarasi		
		$alamat = $this->input->post('alamat');//deklarasi
		$status_akun = $this->input->post('status_akun');//deklarasi
		$password = $this->input->post('password');//deklarasi
		


		$data_insert = array(
			'id_user' => $id_user,
			'username' => $username,
			'nama_user' => $nama_user,
			'no_tlp' => $no_tlp,
			'alamat' => $alamat,
			'status_akun' => $status_akun,
			'password' => $password);

			$where = array('id_user' => $id_user);

			$this->M_user->Update_data_user($where,$data_insert,'user');
				redirect('Admin/Kelola_Akun');
	}


	public function Hapus_user($id_user)   //untuk proses hapus yang mengambil data id
	{
		$data = array('id_user' => $id_user);
		$this->M_user->Hapus_data_user($data, 'user');
		

		redirect('Admin/Kelola_Akun','refresh');
	}


// utuk mengelola toko di bagian admin
	public function Kelola_Toko()   
	{
	
		$data['toko'] = $this->M_toko->Tampil_toko('toko')->result();
		$this->template->load('Layout_Admin','Admin/Kelola_Toko',$data);
	}


	public function Getid_Toko($id_toko)
	{
		$where = array('id_toko' => $id_toko);
		$data['toko'] = $this->M_toko->Edit_data_toko($where,'toko')->result();
		
		$this->template->load('Layout_Admin','Admin/Form_edit_toko',$data);
	}

	public function Proses_Edit_Toko()
	{
		$id_toko = $this->input->post('id_toko');//deklarasi
		$id_user = $this->input->post('id_user');//deklarasi
		$nama_toko = $this->input->post('nama_toko');//deklarasi
		$deskripsi = $this->input->post('deskripsi');//deklarasi		
		
		$data_insert = array(
			'id_toko' => $id_toko,
			'id_user' => $id_user,
			'nama_toko' => $nama_toko,
			'deskripsi' => $deskripsi);

			$where = array('id_toko' => $id_toko);

			$this->M_toko->Update_data_toko($where,$data_insert,'toko');
				redirect('Admin/Kelola_Toko');
	}


	public function Hapus_toko($id_toko)   //untuk proses hapus yang mengambil data id
	{
		$data = array('id_toko' => $id_toko);
		$this->M_toko->Hapus_data_toko($data, 'toko');
		

		redirect('Admin/Kelola_Toko','refresh');
	}
	


	public function Kelola_Tiket()   
	{	
		$data['tiket'] = $this->M_tiket->Tampil_tiket('tiket')->result();
		$this->template->load('Layout_Admin','Admin/Kelola_Tiket',$data);
	}

	
	public function Hapus_Tiket($id_tiket)   //untuk proses hapus yang mengambil data id
	{
		$data = array('id_tiket' => $id_tiket);
		$this->M_tiket->Hapus_data_tiket($data, 'tiket');
		

		redirect('Admin/Kelola_Toko','refresh');
	}


	public function Kelola_Riwayat()   
	{
	
		$data['detail_order'] = $this->M_order->Tampil_order('detail_order')->result();
		$this->template->load('Layout_Admin','Admin/Kelola_Riwayat',$data);
	}



}
