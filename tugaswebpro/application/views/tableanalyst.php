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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/indexstyle.css">

</head>
<body>
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
<!-- Isi -->
<!-- Apalah -->
<?php
  if ($this->session->flashdata('alert')=='sukses_insert'){
    echo "<script>alert('Sukses Insert Data');</script>";
  }else if ($this->session->flashdata('alert')=='sukses_edit'){
    echo "<script>alert('Sukses Edit Data');</script>";
  }else if ($this->session->flashdata('alert')=='sukses_hapus'){
    echo "<script>alert('Sukses Hapus Data');</script>";
  }
  //disini tampilkan flashdata dari controller
?>
<br/>
  <div class="table-responsive">  
    <table align="center" class="table table-bordered table-hover table-striped" id="table-datatable" style="width: 1000px; font-family: Century Gothic;" >
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Alamat Perusahaan</th>
          <th>Telepon</th>    
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach($tableanalyst as $ba){ 
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $ba->nama ?></td>
            <td><?php echo $ba->email ?></td>
            <td><?php echo $ba->alamat ?></td>
            <td><?php echo $ba->telepon ?></td>   
          </tr>    
          <?php } ?>
      </tbody>
    </table>
  </div>
 

<!-- Payment Methods -->
  <section class="bg-light">
    <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm">
              <h6>Bank Relations</h6>
              <div class="container">
              <div class="row" id="pinbank">
                <div class="col-sm">
                  <a href=" ">
                        <img src="<?php echo base_url(); ?>asset/images/img/bank1.png" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>Bank Mega</h6>
                  </div>
                </div>
                <div class="row" id="pinbank">
                  <div class="col-sm">
                    <a href="">
                      <img src="<?php echo base_url(); ?>asset/images/img/bank2.png" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>BCA</h6>
                  </div>
                </div>
                <div class="row" id="pinbank">
                  <div class="col-sm">
                    <a href=" ">
                      <img src="<?php echo base_url(); ?>asset/images/img/bank2.gif" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>BNI</h6>
                  </div>
                </div>
                <div class="row" id="pinbank">
                  <div class="col-sm">
                    <a href=" ">
                      <img src="<?php echo base_url(); ?>asset/images/img/bank3.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                  <h6>BRI</h6>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm">
              <h6>Payment Methods</h6>
              <div class="container">
              <div class="row" id="pin">
                <div class="col-sm">
                  <a href=" ">
                        <img src="<?php echo base_url(); ?>asset/images/img/metode1.png" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>Bank Transfer</h6>
                  </div>
                </div>
                <div class="row" id="pin">
                  <div class="col-sm">
                    <a href="">
                      <img src="<?php echo base_url(); ?>asset/images/img/metode2.png" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>Visa</h6>
                  </div>
                </div>
                <div class="row" id="pin">
                  <div class="col-sm">
                    <a href=" ">
                      <img src="<?php echo base_url(); ?>asset/images/img/metode3.png" width="35px">
                    </a>
                  </div>
                  <div class="col-sm" id="named">
                    <h6>Master Card</h6>
                  </div>
                </div>
                <div class="row" id="pin">
                  <div class="col-sm">
                    <a href=" ">
                      <img src="<?php echo base_url(); ?>asset/images/img/metode4.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                  <h6>Paypal</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <h6>Our Social Media </h6>
            <div class="container">
              <div class="row" id="pin">
                <div class="col-sm">
                  <a href=" ">
                        <img src="<?php echo base_url(); ?>asset/images/img/pin1.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                    <h6>EcSolutionofBusiness</h6>
                </div>
              </div>
              <div class="row" id="pin">
                <div class="col-sm">
                  <a href=" ">
                    <img src="<?php echo base_url(); ?>asset/images/img/pin2.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                  <h6>Ec-Business</h6>
                </div>
              </div>
              <div class="row" id="pin">
                <div class="col-sm">
                  <a href=" ">
                    <img src="<?php echo base_url(); ?>asset/images/img/pin3.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                  <h6>@SolutionBusiness</h6>
                </div>
              </div>
              <div class="row" id="pin">
                <div class="col-sm">
                  <a href=" ">
                    <img src="<?php echo base_url(); ?>asset/images/img/pin4.png" width="35px">
                  </a>
                </div>
                <div class="col-sm" id="named">
                  <h6>SOB Channel</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br>
  </section>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Ec-Business | 2018</p>
    </div>
  </footer>
</body>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</html>