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
    
        <!-- isi -->
        <?php
          echo form_open("Akun_C/inputwishlist");
        ?>
        <div class="container" style="margin-left: 40px;">
          <div class="row">
            <div class="wrap" style="background-color: #F7F7F7; width:350px; height: 330px; border-radius: 5px; font-family: Century Gothic;">
              <br>
              <div class="inputdata" data-validate="Masukkan Kode Barang !!!">
                <input type="text" class="form-control" placeholder=" Masukkan Kode Barang" required name="kode" autofocus style="width: 300px; margin-left: 25px;">
              </div>
              <br>               
              <div class="inputdata" data-validate="Masukkan Nama Barang !!!">
                <input type="text" class="form-control" placeholder=" Masukkan Nama Barang" required name="nama_barang" autofocus style="width: 300px; margin-left: 25px;">
              </div>   
              <br>
              <div class="inputdata" data-validate="Masukkan Harga !!!">
                <input type="text" class="form-control" placeholder=" Masukkan Harga Barang" required name="harga" autofocus style="width: 300px; margin-left: 25px;">
              </div>
              <br>
              <div class="container">
                <button class="btn btn-info" style="width: 300px; margin-left: 10px;">INPUT WISH LIST</button>
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
        <p align="center" style="margin-left: 40px; margin-right: 40px;">Kami hanya bisa berdoa, semoga keinginan anda untuk membeli barang kami dapat tercapai. Jika hal tersebut tercapai maka jangan lupa untuk menyebarkan berita ini ke teman teman anda</p>
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