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
    <!-- Slider -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/bb1.png" alt="First slide" height="120px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/bb2.png" alt="Second slide" height="120px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/bb3.png" alt="Second slide" height="120px">           
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
  <!-- END SLIDER -->

  <!-- isi -->
  <?php
    echo form_open("Akun_C/formbconsultant");
  ?>
        <div class="container" style="margin-left: 40px;">
          <div class="row">
            <div class="col">
              <div class="col-sm" style="margin-top: 2px;">
                <iframe width="730" height="345" style="border-radius: 5px; margin-left: 250px;" src="https://www.youtube.com/embed/hIvVT2al8a4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>  
            </div>
          </div>
        </div>
        <hr>
      <section class="bg-light">
        <hr>
        <p align="center" style="margin-left: 40px; margin-right: 40px;">we will reply your message via email and we will give you form of the payment page in your email. If your payment process have been completed, we will continue the analyst process by visiting your company. we provide money back guarantee if your business does not improve at all.</p>
        <hr>
      </section>
    <!-- Table -->
    <div class="table-responsive">  
    <table align="center" class="table table-bordered table-hover table-striped" id="table-datatable" style="width: 1200px; font-family: Century Gothic;" >
      <thead>
        <tr>
          <th>No</th>
          <th>Permasalahan Bisnis</th>
          <th>Email Customer</th>    
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($businessconsultant as $bc){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $bc->masalahbisnis ?></td>
            <td><?php echo $bc->email ?></td>     
          </tr>
        <?php } ?>
        </tbody>
      </table>
      </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Ec-Business | 2018</p>
        </div>
    </footer>

</body>
</html>