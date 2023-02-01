<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class M_login extends CI_Model{


    function cekuserdaftar($username)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username = '$username' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    function ceklogin($username,$password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username = '$username' and password ='$password' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    function cekuserdaftar_admin($username)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE username = '$username' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    function ceklogin_admin($username,$password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE username = '$username' and password ='$password' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    


}