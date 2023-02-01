<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_tiket extends CI_Model{

    public function Tambah_tiket($data){
        $this->db->insert('tiket',$data);
    }

    public function Tampil_tiket($table){
        return $this->db->get($table);
    }



    public function Hapus_data_tiket($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_tiket($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_tiket($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    
    public function get_all_produk_terbaru()
    {
        $this->db->order_by('id_tiket', 'DESC');
        return $this->db->get('tiket');
    }

    public function get_produk_by_idtiket($id_tiket) {
        return $this->db->get_where('tiket',array('id_tiket' => $id_tiket));
    }

    public function get_tiket_by_user(){
        $id_user = $this -> session -> userdata('id_user');
        return $this->db->get_where('user',  array('id_user'=>$id_user));

    }

}