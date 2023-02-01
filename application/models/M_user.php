<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_user extends CI_Model{

    public function Tambah_user($data){
        $this->db->insert('user',$data);
    }

    public function Tampil_user($table){
        return $this->db->get($table);
    }

    public function Hapus_data_user($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_user($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}