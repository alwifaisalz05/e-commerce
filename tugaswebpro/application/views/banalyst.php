<!DOCTYPE html>
<html>
<head>
  <title>Ec-Business</title>

    <!-- Code CSS BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Code JS BootStrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/indexstyle.css">

</head>
<body>
  <!-- Pop up -->
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <div class="brand">
          <img src="<?php echo base_url(); ?>asset/images/img/logoweb.png" id="logo">
          <a class="navbar-brand js-scroll-trigger" href = "<?php echo site_url('Akun_C/home') ?>" style="font-family: Century Gothic">Ec-Business</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <div class="catalog">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('Akun_C/catalog') ?>">Catalog</a>
              </li>
            </ul>
          </div>
          <div class="input-group input-append" id="search" style="margin-left: px;">
              <input type="text" class="form-control" placeholder="Search.." >
          </div>
          <div class="catalog" style="margin-left: 20px;">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Akun_C/cart')?>">My Cart</a>
              </li>
            </ul>
          </div>
            <ul class="navbar-nav ml-auto" id="masuk">
              <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Akun_C/index')?>">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Akun_C/daftar_view')?>">Sign Up</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
    <br>
    <hr>
    <!-- SLIDER -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            <li data-target="#carouselExampleControls" data-slide-to="3"></li>
            <li data-target="#carouselExampleControls" data-slide-to="4"></li>
            <li data-target="#carouselExampleControls" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b1.png" alt="First slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b2.png" alt="Second slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>           
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b3.png" alt="Third slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>           
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b4.png" alt="Fourth slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>           
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b5.png" alt="Fifth slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>           
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/b6.png" alt="Second slide" height="120px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>           
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <hr>
        <!-- End Slider -->
        <!-- isi -->
        <?php
          echo form_open("Akun_C/formbanalyst");
        ?>
        <div class="container" style="margin-left: 40px;">
          <div class="row">
            <div class="wrap" style="background-color: #F7F7F7; width:350px; height: 330px; border-radius: 5px; font-family: Century Gothic;">
              <br>
              <div class="inputdata" data-validate="Masukkan Nama Anda !!!">
                <input type="text" class="form-control" placeholder=" Masukkan Nama Anda" required name="nama" autofocus style="width: 300px; margin-left: 25px;">
              </div>
              <br>               
              <div class="inputdata" data-validate="Masukkan Email Anda !!!">
                <input type="email" class="form-control" placeholder=" Email" required name="email" autofocus style="width: 300px; margin-left: 25px;">
              </div>   
              <br>     
              <div class="inputdata" data-validate="Masukkan Alamat Perusahaan !!!">
                <input type="text" class="form-control" placeholder=" Alamat Perusahaan" required name="alamat" autofocus style="width: 300px; margin-left: 25px;">
              </div>        
              <br>
              <div class="inputdata" data-validate="Masukkan Nomor Telepon Dengan Benar !!!">
                <input type="text" class="form-control" placeholder=" Nomor Telepon" required name="telepon" autofocus style="width: 300px; margin-left: 25px;">
              </div>
              <br>
              <div class="container">
                <button class="btn btn-info" style="width: 300px; margin-left: 10px;">KIRIM DATA</button>
              </div>
              <br>
            </div>
            <div class="col">
              <div class="col-sm" style="margin-top: 2px;">
                <iframe width="730" height="327" style="border-radius: 5px;" src="https://www.youtube.com/embed/HxmsbQhAFoM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>  
            </div>
          </div>
        </div>
      
      <section class="bg-light">
        <hr>
        <p align="center" style="margin-left: 40px; margin-right: 40px;">we will reply your message via email and we will give you form of the payment page in your email. If your payment process have been completed, we will continue the analyst process by visiting your company. we provide money back guarantee if your business does not improve at all.</p>
        <hr>
      </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Ec-Business | 2018</p>
        </div>
    </footer>


</body>
</html>