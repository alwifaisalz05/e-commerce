<?php
$this->load->view('header');
//isi dengan meload view header
?>

<body>

<div class="limiter" style="font-family: Century Gothic;">
    <div class="container-login100">
        <div class="wrap" style="background-color: #F7F7F7; width: 400px;border-radius: 5px; box-shadow: 5px 5px;">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-90'
            );?>
            <?php
            echo form_open("Akun_C/daftar_akun",$atribut);
                //isi dengan form_open ke controller Akun_C dengan method daftar_akun
            ?>
                <h4 align="center" style="margin-top: -30px; margin-bottom: 30px;"> CREATE AN ACCOUNT </h4>
                <hr> 
                <br>
                <div class="inputdata" data-validate="Tolong Masukkan Rekening !!!">
                    <input type="text" class="form-control" placeholder=" Rekening" required name="rekening" autofocus>
                </div>
                <br>      
                <div class="inputdata" data-validate="Tolong Masukkan Nama Anda !!!">
                    <input type="text" class="form-control" placeholder=" Masukkan Nama" required name="nama" autofocus>
                </div>
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
                    <button class="btn btn-info" style="width: 300px;">
                        CREATE ACCOUNT
                    </button>
                </div>
                <hr>
                <div class="flex-col-c">
						<span style="font-family: Century Gothic; margin-top: 20px;">
							Sudah Punya Akun ?
						</span>
                    <br>
                    <a href="<?php echo site_url('Akun_C/index') ?>" class="txt3" style="font-family: Century Gothic">
                        Login
                    </a>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
//disini load view footer
$this->load->view('footer'); ?>