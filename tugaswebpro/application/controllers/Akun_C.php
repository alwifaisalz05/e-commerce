<?php


class Akun_C extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_M');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function home(){
        $this->load->view('home_v');
    }

    public function daftar_view()
    {
        $this->load->view('daftar');
    }

    //Business View
    public function businessanalyst(){
        $this->load->view('banalyst');
    } 

    public function businessconsultant(){
        $this->load->view('bconsultant');
    }

    public function businessauditor(){
        $this->load->view('bauditor');
    }

    public function pintasantable(){
        $this->load->view('pintasantable');
    }

    public function daftar_akun()
    {
            // lanjutkan fungsi ini untuk menghubungkan ke model Akun_M
        $data = $this->input->post(null,TRUE);
        $insert = $this->Akun_M->daftar_akun($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            //isi dengan flash data disini
            redirect('Akun_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
            //echo javascript alert disini untuk penanda kalo gagal
        }

    }

    public function formbanalyst(){

        $data = $this->input->post(null,TRUE);
        $insert = $this->Akun_M->formbanalyst($data);
        if($insert){
            redirect('Akun_C/home');
        }else{
            echo "GAGAL";
        }

    }

    public function formbconsultant(){
        $data = $this->input->post(null,TRUE);
        $insert = $this->Akun_M->formbconsultant($data);
        if($insert){
            redirect('Akun_C/home');
        }else{
            echo "GAGAL";
        }
    }

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
        $login= $this->Akun_M->login_akun($data);
        if($login){
            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login->username,
                'level' => "Admin"
            );
//            isi dengan session data , terus di set sessionnya
            $this->session->set_userdata($sess_data);
            redirect('Akun_C/home');
        }else{
            //isi dengan flash data disini untuk memberi tau alert ke View
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('Akun_C/index');

        }

    }

    public function paymentprocess(){
        $this->load->view('paymentprocess');
    }

    public function deskripsi1(){
        $this->load->view('deskripsi1');
    }

    public function catalog(){
        $this->load->view('catalog');
    }

    public function wishlist(){
        $this->load->model('Web');
        $data['wishlist'] = $this->Web->get_wish();
        $this->load->view('wishlist',$data);
    } 

    public function barang(){
        $this->load->model('Web');
        $data['barang'] = $this->Web->get_data();
        $this->load->view('barang',$data);
    }

    public function cart(){
        $this->load->model('Web');
        $data['cart'] = $this->Web->get_cart();
        $this->load->view('cart',$data);
    }

    public function tableanalyst(){
        $this->load->model('Web');
        $data['tableanalyst'] = $this->Web->get_a();
        $this->load->view('tableanalyst',$data);
    }

    public function tableconsultant(){
        $this->load->model('Web');
        $data['businessconsultant'] = $this->Web->get_consul();
        $this->load->view('tableconsultant',$data);
    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy($username);
        redirect(site_url('Akun_C/index'));
    }
}