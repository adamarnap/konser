<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_toko extends CI_Model{

    public function Tambah_toko($data){
        $this->db->insert('toko',$data);
    }

    public function Tampil_toko($table){
        return $this->db->get($table);
    }

    public function Hapus_data_toko($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_toko($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_toko($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_toko_by_user(){
        $id_user = $this -> session -> userdata('id_user');
        return $this->db->get_where('toko',  array('id_user'=>$id_user));

    }

    public function get_toko($id_toko) {
        return $this->db->get_where('toko',array('id_toko'=>$id_toko));
    }

    public function get_produk_by_toko($id_toko) {
        return $this->db->get_where('tiket',array('id_toko' => $id_toko));
    }




}