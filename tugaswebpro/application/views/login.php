<?php
$this->load->view('header');
if ($this->session->flashdata('alert')=='sukses_daftar'){
    echo "<script>alert('Sukses Daftar');</script>";
}else if ($this->session->flashdata('alert')=='gagal_login'){
    echo "<script>alert('Username / Password Salah!');</script>";
}
//disini tampilkan flashdata dari controller
?>

<body>

<div class="limiter">
    <div class="container-login100" style="font-family: Century Gothic">
        <div class="wrap" style="background-color: #F7F7F7; width: 400px; height: 600px; border-radius: 5px; box-shadow: 5px 5px;">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-100'
            );?>
            <?php
            echo form_open("Akun_C/cek_login",$atribut);
            //isi dengan form_open ke controller Akun_C dengan method cek_login

            ?>
				<h4 align="center" style="margin-top: -30px; margin-bottom: 30px;"> LOGIN </h4>
                <hr>
                <br>
                <div class="inputdata" data-validate="Tolong Masukkan Username Anda !!!">
                    <input type="text" class="form-control" placeholder=" Masukkan Username" required name="username" autofocus>
                </div>        
                <br>
                <div class="inputdata" data-validate="Tolong Masukkan Password Anda !!!">
                    <input type="password" class="form-control" placeholder=" Masukkan Password" required name="password" autofocus>
                </div>
                <br>
                <hr>
                <div class="container-login100-form-btn">
                    <button class="btn btn-info" style="width: 300px;">LOGIN</button>
                </div>
                <hr>
                <br>
                <div class="col-sm" align="center">
				    <span class="txt1 p-b-9">Belum Memiliki Akun ?</span>
                </div>
                <br>
                <div class="col-sm" align="center">    
                    <a href="<?php echo site_url('Akun_C/daftar_view') ?>" style="font-family: Century Gothic; color: green;">CREATE AN ACCOUNT</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$this->load->view('footer'); ?>