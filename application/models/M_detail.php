<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_detail extends CI_Model{

    public function Tambah_detail($data){
        $this->db->insert('detail_order',$data);
    }

    public function Tampil_detail($table){
        return $this->db->get($table);
    }



    public function Hapus_data_detail($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_detail($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_detail($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    
    public function get_all_produk_terbaru()
    {
        $this->db->order_by('id_detail', 'DESC');
        return $this->db->get('detail');
    }

    public function get_produk_by_iddetail($id_detail) {
        return $this->db->get_where('detail',array('id_detail' => $id_detail));
    }

    public function get_detail_by_user(){
        $id_user = $this -> session -> userdata('id_user');
        return $this->db->get_where('user',  array('id_user'=>$id_user));

    }

}