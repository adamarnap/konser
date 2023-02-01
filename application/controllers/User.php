<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_toko');
		$this->load->model('M_tiket');
		$this->load->model('M_order');
		$this->load->model('M_detail');
		$this->load->library('session');

		if($this->session->userdata('level')!='user'){
            redirect('Login','refresh');
            }
	}

// controller halaman utama
//untuk load halaman utama
    public function index()
	{
	
		$data['tiket'] = $this->M_tiket->get_all_produk_terbaru()->result();
		$data['user'] = $this->M_user->Tampil_user('user')->result();
		$this->template->load('Layout_User','User/Dashboard',$data);
	}
// untuk buat toko
	public function Buat_Toko(){
		$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
		$this->template->load('Layout_User','User/Form_Buat_Toko',$data);
	}
//untuk proses buat toko
	public function Proses_Buat_Toko(){
		$id_toko = $this->input->post('id_toko');
		$id_user = $this->input->post('id_user');
		
		$nama_toko = $this->input->post('nama_toko');
		$deskripsi = $this->input->post('deskripsi');

		$data_insert = array(
			'id_toko' => $id_toko,			
			'id_user' => $id_user,
			'nama_toko' => $nama_toko,
			'deskripsi' => $deskripsi
		);

		$this->M_toko->Tambah_toko($data_insert);
		redirect('User/Toko_Berhasil_Ditambah');
	}
//untuk load halaman menu toko
	public function Toko($id_toko){
        $data['nama_toko'] = $this->M_toko->get_toko($id_toko) -> row_object();
		$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
        $this -> template -> load('Layout_User', 'User/Menu_Toko', $data);
	}
//untuk load halaman tiket
	public function Tiket($id_toko){
		$data['nama_toko'] = $this->M_toko->get_toko($id_toko) -> row_object();
		$data['tiket'] = $this->M_toko->get_produk_by_toko($id_toko) -> result_array();
		$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();

		$this -> template -> load('Layout_User', 'User/Produk_Tiket', $data);
	}
//untuk load halaman tambah tiket
	public function Tambah_Tiket($id_toko){
        $data['nama_toko'] = $this-> M_toko->get_toko($id_toko)->row_object();
		$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
        $data['id_toko'] = $id_toko;
        $this -> template -> load('Layout_User', 'User/Form_Tambah_Tiket', $data);
    }
//untuk pross tambah tiket
	public function Proses_Upload_Tiket(){
			$config['upload_path']          = './gambartiket/';
			$config['allowed_types']        = 'gif|jpg|png|PNG';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar'))
			{
				echo "Gek Raiso di UPLOAD NDESSS !!!!";
			}
			else{
				$gambar = $this->upload->data();
				$id_toko = $this->input->post('id_toko');
				$nama_tiket = $this->input->post('nama_tiket');		
				$harga = $this->input->post('harga');
				$stok = $this->input->post('stok');
				$deskripsi_tiket = $this->input->post('deskripsi_tiket');

				$data_insert = array(
					'id_toko' => $id_toko,			
					'nama_tiket' => $nama_tiket,
					'harga' => $harga,
					'stok' => $stok,
					'deskripsi_tiket' => $deskripsi_tiket,
					'gambar' => $gambar['file_name']
				);

				$this->M_tiket->Tambah_tiket($data_insert);
				redirect('User/Tiket_Berhasil_Ditambah');
			}
		}

//untuk load halaman beli tiket
		public function Beli_Tiket($id_tiket){
			$data['tiket'] = $this->M_tiket->get_produk_by_idtiket($id_tiket)->result();
			//$data['user'] = $this->M_tiket->get_tiket_by_user($id_user)->result();
			$this->template->load('Layout_User','User/Konfirmasi_Beli',$data);
		}

		public function Checkout_Tiket($id_tiket){

			$data['tiket'] = $this->M_tiket->get_produk_by_idtiket($id_tiket)->result();
			$data['user'] = $this->M_tiket->get_tiket_by_user()->result();
			$this->template->load('Layout_User','User/Bayar_Tiket',$data);
		}
//untuk  prosees halaman tambah nota
		public function Tambah_Data_Nota($id_tiket){
				
				$id_tiket = $this->input->post('id_tiket');
				$metode = $this->input->post('metode');		
				$id_user = $this->input->post('id_user');

				$data_insert = array(
					'id_tiket' => $id_tiket,			
					'metode' => $metode,
					'id_user' => $id_user					
				);

			$data['user'] = $this->M_tiket->get_tiket_by_user($id_user)->result();
			$data['tiket'] = $this->M_tiket->get_produk_by_idtiket($id_tiket)->result();
			$this->M_order->Tambah_order($data_insert);
			$this->template->load('Layout_User','User/Cetak_Tiket',$data);
			
		}

//untuk halaman cetak tiket ke pdf
		public function Cetak_Tiket($id_tiket){
			
			$data['tiket'] = $this->M_tiket->get_produk_by_idtiket($id_tiket)->result();
			
			$this->load->view('User/Nota_Tiket',$data);
		}


//unuk halaman validasi tiket berhasil di tambah
						public function Tiket_Berhasil_Ditambah(){
							$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
							$this->template->load('Layout_User','User/Tiket_Berhasil_Ditambah',$data);
						}
// untuk validasi tko berhasil di tambah
						public function Toko_Berhasil_Ditambah(){
							$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
							$this->template->load('Layout_User','User/Toko_Berhasil_Ditambah',$data);
						}

//proses hapus tiket
						public function Hapus_Tiket($id_tiket){
							$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
							$data = array('id_tiket'=>$id_tiket);
							$this->M_tiket->Hapus_data_tiket($data,'tiket');

							$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
														Data  Berhasil Dihapus</div>');

							
							redirect('User/Tiket_Setelah_Hapus/');
							
						}
//halaaman pemberi tahuan tiket setelah di hapus
						public function Tiket_Setelah_Hapus(){
							$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
							$this->template->load('Layout_User','User/Produk_Berhasil_Dihapus',$data);
						}


//halaman untuk meload riwayat pesanaan toko
public function Riwayat_Pesanan_Toko($id_toko){
	$data['detail'] = $this->M_detail->Tampil_detail('detail_order')->result();
	$data['nama_toko'] = $this->M_toko->get_toko($id_toko) -> row_object();
	$data['toko'] = $this->M_toko->get_toko_by_user()->result_array();
	$this->template->load('Layout_User','User/Riwayat_Pesanan_Toko',$data);
}

}