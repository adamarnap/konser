<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('M_login');
		$this->load->library('session');
	}

// controller halaman utama
    public function index()
	{
		$this->load->view('Login');
	}
   public function Proses_Login()
    {
        $username = $this->input->post('username');//deklarasi

        $password = $this->input->post('password');//deklarasi

        $cekuserdaftar = $this->M_login->cekuserdaftar($username);//menyocokkan data yang berasal dari form login ke Model (databes)

        //kondisi kondisi jika hendak melakukan login
        if($cekuserdaftar){
            $ceklogin = $this->M_login->ceklogin($username,$password);//variabel untuk menyocokkan data username dan Password dari form login

            if ($ceklogin){ 

                foreach ($ceklogin as $row)
                

                if($row->status_akun == "AKTIF"){
                    $this->session->set_userdata('id_user', $row->id_user);
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('nama_user', $row->nama_user);
                    $this->session->set_userdata('level', $row->level);


                        if($this->session->userdata('level')=="user"){//prosess session terisi
                            redirect ('User');
                        }
                        else{
                            echo"<script>alert('Maaf anda tidak memiliki hak akses.');</script>";
                            redirect ('Login','refresh');
                        }

                    }else{
                        echo"<script>alert('Maaf akun anda belum aktif.');</script>";
                        redirect('Login','refresh');
                    }
                
            }else{
                    echo"<script>alert('Maaf username atau Password salah.');</script>";
                    redirect('Login','refresh');
                }
        }else{
            echo"<script>alert('Maaf akun belum terdaftar.');</script>";
            redirect('Login','refresh');
        }
    }


    //function logout
    public function Logout()
    {
        $this->session->sess_destroy();//untuk menghapus isi session
        redirect('Login','refresh');
    }



    public function Login_Admin()
	{
		$this->load->view('Login_Admin');
	}

    public function Proses_Login_Admin()
    {
        $username = $this->input->post('username');//deklarasi

        $password = $this->input->post('password');//deklarasi

        $cekuserdaftar_admin = $this->M_login->cekuserdaftar_admin($username);//menyocokkan data yang berasal dari form login ke Model (databes)

        //kondisi kondisi jika hendak melakukan login
        if($cekuserdaftar_admin){
            $ceklogin_admin = $this->M_login->ceklogin_admin($username,$password);//variabel untuk menyocokkan data username dan Password dari form login

            if ($ceklogin_admin){ 

                foreach ($ceklogin_admin as $row)
                

                if($row->status_akun == "AKTIF"){
                    $this->session->set_userdata('id_admin', $row->id_admin);
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('nama', $row->nama);
                    $this->session->set_userdata('level', $row->level);


                        if($this->session->userdata('level')=="admin"){//prosess session terisi
                            redirect ('Admin');
                        }
                        else{
                            echo"<script>alert('Maaf anda tidak memiliki hak akses.');</script>";
                            redirect ('Login','refresh');
                        }

                    }else{
                        echo"<script>alert('Maaf akun anda belum aktif.');</script>";
                        redirect('Login','refresh');
                    }
                
            }else{
                    echo"<script>alert('Maaf username atau Password salah.');</script>";
                    redirect('Login','refresh');
                }
        }else{
            echo"<script>alert('Maaf akun belum terdaftar.');</script>";
            redirect('Login','refresh');
        }
    }



}