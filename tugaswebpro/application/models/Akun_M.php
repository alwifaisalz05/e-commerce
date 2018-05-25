<?php

class Akun_M extends CI_Model
{
    public function daftar_akun($data)
    {
        $param = array(
            "rekening"=>$data['rekening'],
            "nama"=>$data['nama'],
            "username"=>$data['username'],
            "password"=>$data['password']
        );
        $insert = $this->db->insert('user', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function formbanalyst($data){
        $param = array(
            "nama"=>$data['nama'],
            "email"=>$data['email'],
            "alamat"=>$data['alamat'],
            "telepon"=>$data['telepon']
        );
        $insert = $this->db->insert('businessanalyst',$param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function inputwishlist($data){
        $param = array(
            "kode"=>$data['kode'],
            "nama_barang"=>$data['nama_barang'],
            "harga"=>$data['harga']
        );
        $insert = $this->db->insert('wishlist',$param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function formbconsultant($data){
        $param = array(
            "masalahbisnis"=>$data['masalahbisnis'],
            "email"=>$data['email'],
        );
        $insert = $this->db->insert('businessconsultant',$param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('user');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}