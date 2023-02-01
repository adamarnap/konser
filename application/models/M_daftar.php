<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_daftar extends CI_Model{

    public function Daftar_Akun($data){
        $this->db->insert('user',$data);
    }
}