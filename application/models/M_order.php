<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_order extends CI_Model{

    public function Tambah_order($data){
        $this->db->insert('detail_order',$data);
    }

    public function Tampil_order($table){
        return $this->db->get($table);
    }



    public function Hapus_data_order($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_order($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_order($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    
    public function get_all_produk_terbaru()
    {
        $this->db->order_by('id_order', 'DESC');
        return $this->db->get('order');
    }

    public function get_produk_by_idorder($id_order) {
        return $this->db->get_where('order',array('id_order' => $id_order));
    }

    public function get_order_by_user(){
        $id_user = $this -> session -> userdata('id_user');
        return $this->db->get_where('user',  array('id_user'=>$id_user));

    }

}