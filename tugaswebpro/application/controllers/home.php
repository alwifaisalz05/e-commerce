<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('web');
	}

	public function index()
	{
        if ($this->session->userdata('level')!="Admin") {
            redirect('Akun_C/home');
        }
		$data = array(
			'title' => 'Data Barang',
			'barang' => $this->web->get_data()
		);
		$this->load->view('home',$data);
	}

	public function add()
	{
		$data = $this->input->post(null,TRUE);
		$insert = $this->web->save_data($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('Akun_C/home');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }

	}

    public function addtocart(){
        $insert_data = array(
            "kode"=>$this->input->post('kode'),
            "nama_barang"=>$this->input->post('nama_barang'),
            "jumlah"=>$this->input->post('jumlah'),
            "harga"=>$this->input->post('harga')
        );
        $this->cart->insert($insert_data);

    }

    public function edit()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->web->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('Akun_C/barang');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    public function editwish()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->web->edit_wish($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('Akun_C/wishlist');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    public function hapuswish()
    {
        $kode = $this->input->post('kode');
        $hapus = $this->web->delete_wish($kode);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('Akun_C/wishlist');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }

    public function hapus()
    {
        $kode = $this->input->post('kode');
        $hapus = $this->web->delete_data($kode);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('Akun_C/barang');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }

    public function hapuscart()
    {
        $kode = $this->input->post('kode');
        $hapus = $this->web->hapuscart($kode);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('Akun_C/cart');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        } 
    }

    public function hapusconsultant(){
        $email = $this->input->post('email');
        $hapus = $this->web->hapusconsultant($email);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('Akun_C/tableconsultant');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";
        }
    }
}
