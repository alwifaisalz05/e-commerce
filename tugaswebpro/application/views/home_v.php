<!-- Ergandhi Yudha Kurniawan 1301154147= barang.php, banalyst.php, beserta fungsinya -->
<!-- Alwi Faisal Zulfikar 1301150007= cart.php, login.php, daftar.php -->
<!-- Made Rama PS 1301154203= Catalog.php, bconsultant.php -->
<!-- Niko N 1301154315= home_v.php, wishlist.php-->

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
	<div id="myModal" class="modal fade" role="dialog" style="margin-top: 50px;">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;
					</button>
				</div>
				<div class="modal-body">
					<h6>Selamat Datang !!</h6>
					<p>Kami Menyediakan Berbagai Jasa dan Barang untuk Anda Beli, Jadilah Konsumen yang Pintar dengan Membeli Barang yang Berguna dan Bermanfaat</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
				</div>
			</div>
		</div>
	</div>

  
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
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
          <li data-target="#carouselExampleControls" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/weblogo.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/weblogo2.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
            </div>           
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/weblogo3.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/weblogo4.png" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
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
    <!-- Pilihan Bidang Jasa -->
    <hr>
    <div class="service">
      	<div class="serviceimg">
      		<div id="pilih" align="center">
            	<a href="<?php echo site_url('Akun_C/businessconsultant')?>">
              	<input class="pilihan1" type="image" src="<?php echo base_url(); ?>asset/images/img/pilih1.png" height="200px" id="gambar"/>
            	</a>
            	<a href="<?php echo site_url('Akun_C/businessanalyst')?>">
      				  <input class="pilihan2" type="image" src="<?php echo base_url(); ?>asset/images/img/pilih2.png" height="200px" id="gambar"/>
            	</a>
            	<a href="<?php echo site_url('Akun_C/businessauditor')?>">
      				  <input class="pilihan3" type="image" src="<?php echo base_url(); ?>asset/images/img/pilih3.png" height="200px" id="gambar"/>
            	</a>
          	</div> 
      	</div>	
    </div>
    <hr>
    <!-- Catalog -->
    <!-- Rekomendasi -->
    <!-- Camera -->
    <img src="<?php echo base_url(); ?>asset/images/img/gambartengah.png" height="120px" style="margin-left: 10px;">
    <hr>
    <img src="<?php echo base_url(); ?>asset/images/img/categorycamera.png" height="30px" style="margin-left: 115px;">
    <div class="container">
    	<div class="row">
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/cat1.jpg" class="img-responsive" alt="Nikon Coolpix 20 Mega Pixel Black">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="<?php echo site_url('Akun_C/deskripsi1'); ?>" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Nikon Coolpix 20 Mega Pixel Black</a></h3>
              		<div class="pi-price">Rp5.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
              		<div class="sticker sticker-new"></div>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/cat2.jpg" class="img-responsive" alt="Fujifilm 20 Mega Pixel">
               			<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Fujifilm 20 Mega Pixel</a></h3>
              		<div class="pi-price">Rp4.000.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/cat1.jpg" class="img-responsive" alt="Fujifilm 25 Mega Pixel">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Fujifilm 25 Mega Pixel</a></h3>
              		<div class="pi-price">Rp7.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
           		</div>
        	</div>
    	</div>
    	<br>
    	<div class="row">
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                  		<img src="<?php echo base_url(); ?>asset/images/img/cat4.jpg" class="img-responsive" alt="Nikon Coolpix 20 Mega Pixel Red">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Nikon Coolpix 20 Mega Pixel Red</a></h3>
              		<div class="pi-price">Rp5.000.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/cat5.jpg" class="img-responsive" alt="Fujifilm 25 Mega Pixel Dual-Battery">
               			<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Fujifilm 25 Mega Pixel Dual-Battery</a></h3>
              		<div class="pi-price">Rp8.000.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/cat2.jpg" class="img-responsive" alt="Fujifilm 20 Mega Pixel Mirrorless">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Fujifilm 20 Mega Pixel Mirrorless</a></h3>
              		<div class="pi-price">Rp7.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
           		</div>
        	</div>
    	</div>
	</div>
	<!-- Kantor -->
	<hr>
	<img src="<?php echo base_url(); ?>asset/images/img/categoryoffice.png" height="30px" style="margin-left: 115px;">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor1.png" class="img-responsive" alt="Blue Bones Chair" height="130px" id="kantor">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Blue Bones Chair</a></h3>
              		<div class="pi-price">Rp1.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
              		<div class="sticker sticker-new"></div>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor2.png" class="img-responsive" alt="Black Std Chair" height="130px" id="kantor">
               			<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Black Std Chair</a></h3>
              		<div class="pi-price">Rp1.000.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor3.png" class="img-responsive" alt="Enjoy! Chair" height="130px" id="kantor">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Enjoy! Chair</a></h3>
              		<div class="pi-price">Rp4.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
           		</div>
        	</div>
    	</div>
    	<br>
    	<div class="row">
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor4.png" class="img-responsive" alt="Drawer Letter File" height="130px" id="kantor">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Drawer Letter File</a></h3>
              		<div class="pi-price">Rp1.250.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor5.png" class="img-responsive" alt="Mini Drawer File" height="130px" id="kantor">
               			<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Mini Drawer File</a></h3>
              		<div class="pi-price">Rp500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
            	</div>
        	</div>
        	<div class="col-md-4">
            	<div class="product-item">
              		<div class="pi-img-wrapper">
                		<img src="<?php echo base_url(); ?>asset/images/img/kantor6.png" class="img-responsive" alt="Drawer Letter Exc" height="130px" id="kantor">
                		<div>
                  			<a href="#" class="btn">Zoom</a>
                  			<a href="#" class="btn">View</a>
                		</div>
              		</div>
              		<h3><a href="shop-item.html">Drawer Letter Exc</a></h3>
              		<div class="pi-price">Rp3.500.000,00</div>
              		<a href="javascript:;" class="btn add2cart">Add to cart</a>
           		</div>
        	</div>
    	</div>
	</div>
	<!-- End Catalog -->
	<!-- Maps -->
	<section class="bg-light">
		<hr>
		<img src="<?php echo base_url(); ?>asset/images/img/gambarbawah.png" height="120px" style="margin-left: 20px;">
    	<br>
    	<br>
    	<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3592692768293!2d107.63193761413383!3d-6.966875170149251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e84d63e95fef%3A0xfce4838006337423!2sJl.+Adhyaksa+IV%2C+Sukapura%2C+Dayeuhkolot%2C+Bandung%2C+Jawa+Barat+40267!5e0!3m2!1sid!2sid!4v1520869905134" width="1315" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    	<hr>
    </section>
    <br>
    <section>
    	<div class="container">
          <div class="row">
            <div class="col-sm">
              <img src="<?php echo base_url(); ?>asset/images/img/transaksi1.png" height="100px" id="icon">
              <br>
              <h6 align="center">Jaminan Keamanan Transaksi</h6>
              <p align="center">Kami memberikan jaminan transaksi walaupun tidak 100%</p>
            </div>
            <div class="col-sm">
              <img src="<?php echo base_url(); ?>asset/images/img/transaksi2.png" height="100px" id="icon">
              <br>
              <h6 align="center">Pengisian Data Mudah</h6>
              <p align="center">Pengisian data yang kami berikan dalam web mudah dimengerti</p>
            </div>
            <div class="col-sm">
              <img src="<?php echo base_url(); ?>asset/images/img/transaksi3.png" height="100px" id="icon">
              <br>
              <h6 align="center">Mendukung Mobile Transaction</h6>
              <p align="center">Anda dapat melakukan transaksi melalui handpone dengan mudah</p>
            </div>
            <div class="col-sm">
              <img src="<?php echo base_url(); ?>asset/images/img/transaksi4.png" height="100px" id="icon">
              <br>
              <h6 align="center">Barang Terjamin</h6>
              <p align="center">Anda dapat melakukan unboxing barang langsung di rumah</p>
            </div>
          </div>
        </div>
    </section>
    <br>
    <!-- Informasi Kontak dan Pembayaran -->
    
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
    <!-- Footer -->
    <footer class="py-5 bg-dark">
    	<div class="container">
        	<p class="m-0 text-center text-white">Copyright &copy; Ec-Business | 2018</p>
      	</div>
    </footer>
</body>
<script>
	$('#myModal').modal('show');
</script>
</html>