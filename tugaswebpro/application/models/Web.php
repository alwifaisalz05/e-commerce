<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Web extends CI_Model
{

	public function get_data()
	{
        $table = 'barang';
        $query = $this->db->get('barang');
		return $query->result();
	}

    public function get_cart()
    {
        $table = 'cart';
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function get_consul(){
        $table = 'businessconsultant';
        $query = $this->db->get('businessconsultant');
        return $query->result();
    }

    public function get_wish(){
        $table = 'wishlist';
        $query = $this->db->get('wishlist');
        return $query->result();   
    }

    public function get_a(){
        $table = 'businessanalyst';
        $query = $this->db->get('businessanalyst');
        return $query->result();
    }

	public function save_data($data)
	{
		$param = array(
					"kode"=>$data['kode'],
					"nama_barang"=>$data['nama_barang'],
					"stok_barang"=>$data['stok_barang'],
					"harga"=>$data['harga']
		);
		$insert = $this->db->insert('barang', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

    public function addtocart($data){
        $param = array(
                    "kode"=>$data['kode'],
                    "nama_barang"=>$data['nama_barang'],
                    "jumlah"=>$data['jumlah'],
                    "harga"=>$data['harga']
        );
        $insert = $this->db->insert('cart', $param);
        if($insert){
            return TRUE;;
        }else{
            return FALSE;
        }
    }

    public function hapuscart($kode){
        $table = 'cart';
        $this->db->where('kode', $kode);
        $delete = $this->db->delete($table);

        if($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function hapusconsultant($email){
        $table = 'businessconsultant';
        $this->db->where('email', $email);
        $delete = $this->db->delete($table);
        
        if($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_data($data){
	    $table = 'barang';
        $param = array(
            "kode"=>$data['kode'],
            "nama_barang"=>$data['nama_barang'],
            "stok_barang"=>$data['stok_barang'],
            "harga"=>$data['harga'],
        );
        $this->db->where('kode', $data['kode']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_wish($data){
        $table = 'wishlist';
        $param = array(
            "kode"=>$data['kode'],
            "nama_barang"=>$data['nama_barang'],
            "harga"=>$data['harga'],
        );
        $this->db->where('kode', $data['kode']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    public function delete_wish($kode){
        $table = 'barang';
        $this->db->where('kode', $kode);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }

    public function delete_data($kode){
        $table = 'barang';
        $this->db->where('kode', $kode);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}

?>