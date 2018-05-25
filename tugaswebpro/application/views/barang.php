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
<div class="container" style="margin-top: 20px; margin-left: 40px; font-family: Century Gothic;">
  <div class="col-md-12">
    <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambah"> + Tambah Data Barang</button>
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Tambah Data Barang</h4>
                    </div>
                    <?php echo form_open("home/add"); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="kode">Kode Barang</label>
                                <input type="text" name="kode" class="form-control" id="kode" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="stok_barang">Stok Barang</label>
                                <input type="text" name="stok_barang" class="form-control" id="stok_barang" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
  </div>
</div>
<br/>
<div class="table-responsive">  
  <table align="center" class="table table-bordered table-hover table-striped" id="table-datatable" style="width: 1200px; font-family: Century Gothic;" >
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Stok Barang</th>
        <th>Harga</th>
        <th>Action</th>     
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      foreach($barang as $brg){ 
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $brg->kode ?></td>
          <td><?php echo $brg->nama_barang ?></td>
          <td><?php echo $brg->stok_barang ?></td>
          <td><?php echo $brg->harga ?></td>       
          <td style="text-align: center;">
            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $brg->kode; ?>">Edit</button>
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $brg->kode; ?>">Hapus</button>
          </td>
        </tr>
          <div id="edit<?php echo $brg->kode; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content" style="font-family: Century Gothic">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"></button>
                  <h4 class="modal-title">Edit Data Barang</h4>
                </div>
                <?php echo form_open("home/edit"); ?>
                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label" for="kode">Kode</label>
                    <input type="text" class="form-control" disabled value="<?php echo $brg->kode;?>" id="kode">
                    <input type="hidden" name="kode" class="form-control" value="<?php echo $brg->kode;?>" id="kode" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang;?>" id="nama_barang" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="stok_barang">Stok</label>
                    <input type="text" name="stok_barang" class="form-control" value="<?php echo $brg->stok_barang;?>" id="stok_barang" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga;?>" id="harga" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                  <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
          <div id="hapus<?php echo $brg->kode; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"></button>
                  <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                  <?php echo form_open("home/hapus"); ?>
                  <input type="hidden" name="kode" class="form-control" value="<?php echo $brg->kode;?>" id="kode" required>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                  <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        <?php 
      }

      ?>
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