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
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/gambartengah.png" alt="First slide" height="120px">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url(); ?>asset/images/img/gambartengah2.png" alt="Second slide" height="120px">
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
    <!-- End Slider -->

    <br>
        <img src="<?php echo base_url(); ?>asset/images/img/categorycamera.png" height="30px" style="margin-left: 115px;">
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-sm" id="foto">
              <img src="<?php echo base_url(); ?>asset/images/img/deskripsi1foto.png" height="400px">
            </div>
            <div class="col-sm">
              <h3>Nikon Coolpix</h3>
              <hr>
              <h5>Description</h5>
              <p align="justify">Great pictures are only a touch of a button away. Enjoy hassle-free photography and movie making with the amazing COOLPIX L25. The camera's Easy Auto Mode automatically selects the most appropriate scene mode for whatever you're shooting. Get great portraits, landscapes, close-ups and even tricky backlit shots with ease.</p>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col-sm" style="margin-top: 30px;">
                    <button class="btn btn-warning" style="width: 240px;" onclick="window.location.href='<?php echo site_url('Akun_C/catalog');?>'">CATALOG</button>
                  </div>
                  <div class="col-sm" style="margin-top: 30px;">
                    <button class="btn btn-info" style="width: 240px;">ADD TO CART</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="deskripsilanjutan">
          <h5>Features</h5>
          <h6>5x Zoom with Wide-Angle Capability</h6>
          <p align="justify">The 5x optical zoom NIKKOR lens of the COOLPIX L25 covers a focal range from 28 mm wide-angle to 140 mm telephoto*. This makes it easy to capture group pictures and landscapes at the wide end, to expressive close-ups from a distance using the telephoto range.</p>
          <h6>Easy Auto Mode</h6>
          <p align="justify">Easy auto mode lets you simply turn on the camera and start shooting, while the camera automatically selects the appropriate scene mode from among Portrait, Night portrait, Night landscape, Landscape, Backlighting and Close-up.</p>
          <br>
          <h6>The Viewing Ease of a 7.5-cm (3-in.) TFT LCD Monitor</h6>
          <p align="justify">The bright, large display of the 7.5-cm (3-in.) 230k-dot (approx.) TFT LCD monitor offers a clear view, whether previewing a framed shot before snapping the shutter, or looking over images previously taken. The monitor features brightness adjustment for clear viewing in varying lighting conditions.The bright, large display of the 7.5-cm (3-in.) 230k-dot (approx.) TFT LCD monitor offers a clear view, whether previewing a framed shot before snapping the shutter, or looking over images previously taken. The monitor features brightness adjustment for clear viewing in varying lighting conditions.</p>
          <br>
          <h6>Smart Portrait System</h6>
          <p align="justify">Nikon's Smart Portrait System incorporates into COOLPIX cameras a series of automatic functions, including In-Camera Red-Eye Fix, Improved Face-Priority AF, Face Priority AE, Smile Mode, Blink Warning, Skin Softening and D-Lighting.</p>
          <br>
          <h6>Red-Eye Fix</h6>
          <p align="justify">All COOLPIX cameras offer advanced red-eye reduction capability. When set, the in-camera Red-Eye Fix automatically analyses the captured image for the presence of red-eye and corrects it before saving the image to memory, so you may never see red eyes again.</p>
          <br>
          <h6>Face-Priority AF</h6>
          <p align="justify">Available in all COOLPIX models, Face-Priority AF automatically detects a person’s face at typical portrait-taking distances, then activates the camera's autofocus to focus upon the face area. When the camera's Portrait Mode is selected, Face-Priority is automatically activated. A special digital detection program will scan for facial details and then control autofocus operation based on the location of the detected face in the scene. Even if the subject moves, or if you recompose the picture, Face-Priority AF will respond to keep the point of focus on the subject’s face. (When there are two or three people in the scene, Face-priority AF will operate using closest subject priority.) The technology of Face-Priority AF is based on the detection of facial characteristics and general scene arrangement; the technology can also detect when the camera is held for vertical or horizontal composition. The only requirement is that the person be facing the camera.</p>
          <br>
          <h6>Smile Mode, Blink Warning</h6>
          <p align="justify">Smile Mode automatically fires the shutter when the selected subject smiles; in this mode, the camera will essentially wait to fire until it detects a smile. Blink Warning displays a warning message when it detects that the subject has blinked as the photo was taken, allowing you to immediately retake the shot—without waiting to check the photo. In both cases, the camera's computer accesses a database of facial characteristics to determine the presence of these reactions. Blink Proof is a new addition to Smile Mode options. When it's selected, the camera will detect the face of a portrait subject and automatically take two sequential shots when the subject smiles, then save the image in which the subject’s eyes are open.</p>
        </div>
        <hr>
        <div class="spesifikasi">
          <table id="tabel" class="table table-striped table-bordered" style="width:100%" >
            <thead class="tablekepala">
                <tr>
                    <td id="kebawah1">Spesification</td>
                    <td>Details</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="kebawah1">Effective pixels</td>
                    <td>10.1 million</td> 
                </tr>
                <tr>
                    <td id="kebawah1">Image sensor</td>
                    <td>1/3-in. type CCD; total pixels: approx. 10.44 million</td>
                </tr>
                <tr>
                    <td id="kebawah1">Lens</td>
                    <td>5x zoom NIKKOR; 4.0-20.0 mm (35mm [135] format angle of view: 28-140 mm); f/2.7-6.8; Digital zoom: up to 4x (35mm [135] format angle of view: Approx. 560 mm)</td>
                </tr>
                <tr>
                    <td id="kebawah1">Focus range(from lens)</td>
                    <td>30 cm (1 ft) to infinity; Macro mode: 3 cm (1.2 in.) to infinity</td>
                </tr>
                <tr>
                    <td id="kebawah1">Monitor</td>
                    <td>7.5 cm (3-in.), approx. 230k-dot, TFT LCD</td>
                </tr>
                <tr>
                    <td id="kebawah1">Storage media</td>
                    <td>Internal memory (approx. 20 MB), SD/SDHC/SDXC memory cards</td>
                </tr>
                <tr>
                    <td id="kebawah1">Image size (pixels)</td>
                    <td>10M (High) [3648 x 2736], 10M [3648 x 2736], 8M [3264 x 2448], 4M [2272 x 1704], 2M [1600 x 1200], VGA [640 x 480], 16:9 [3584 x 2016]</td>
                </tr>
                <tr>
                    <td id="kebawah1">Vibration Reduction (VR)</td>
                    <td>Electronic VR (still pictures)</td>
                </tr>
                <tr>
                    <td id="kebawah1">ISO sensitivity</td>
                    <td>Auto (auto gain ISO 80-1600)</td>
                </tr>
                <tr>
                    <td id="kebawah1">Interface</td>
                    <td>Hi-Speed USB</td>
                </tr>
                <tr>
                    <td id="kebawah1">Power sources</td>
                    <td>Two LR6/L40 (AA-size) alkaline batteries (supplied), Two FR6/L91 (AA-size) lithium batteries (optional), Two EN-MH2 rechargeable Ni-MH batteries (optional), AC Adapter EH-65A (optional), Battery Charger MH-72/MH-73(optional)</td>
                </tr>
            </tbody>
          </table>
          <hr>
        </div>
        <hr>
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
        <hr>

      
      <section class="bg-light">
        <hr>
        <p align="center" style="margin-left: 40px; margin-right: 40px;">we will reply your message via email and we will give you form of the payment page in your email. If your payment process have been completed, wait a few days until the shipping process is complete.</p>
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