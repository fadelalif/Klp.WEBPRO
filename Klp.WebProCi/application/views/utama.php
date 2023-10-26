<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Relawanin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styleUtama.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-fixed w-100">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?=base_url()?>assets/img/relawain logo 1.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
              <a class="nav-link active" aria-current="page" href="#">Utama</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Fitur</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Berita</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="btn-link" style="margin:15px;">
        <a href="<?=base_url()?>index.php/Dashboard">
          <button type="button" class="btn btn-outline-light btn-lg">Masuk</button>
        </a>
      </div>
      <div class="btn-link">
        <a href="<?=base_url()?>index.php/Dashboard">
          <button type="button" class="btn btn-outline-light btn-lg">Daftar</button>
        </a>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Hero Section -->
    <section id="hero">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-6 hero-tagline">
            <h1>Ayo Cintai Bumi Dengan Mengikuti Aksi Cinta Bumi.</h1>
            <p>
              Ayo bergabung kedalam suatu komunitas untuk dapat menjalakan aksi
              cinta bumi melalui aplikasi yang kembangkan
            </p>
            <div class="button-container">
              <button class="download-button1">
                <img src="<?=base_url()?>assets/img/ios-android 1.jpg" alt="" style="width: 200px; border-radius:8%"/>
              </button>
              <button class="download-button2">
                <img src="<?=base_url()?>assets/img/ios-android 2.jpg" alt="" style="width: 200px; border-radius:8%"/>
              </button>
            </div>
          </div>
          <div class="col-md-6 hero-tagline d-flex justify-content-end">
            <img src="<?=base_url()?>assets/img/image 2.png" alt="" style="width:533px; padding-top: 100px; margin-right: 49px;" />
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan Section -->
    <section id="layanan">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 hero-tagline d-flex ">
            <img src="<?=base_url()?>assets/img/kiri utama.jpg" alt="" style="width:533px; margin-left: 81px;" />
          </div>
          <div class="col-md-6 layanan-tagline d-flex justify-content-end">
            <div class="content w-100">
              <h1>Ciptakan Komunitas Aksi Cinta Bumi Kamu</h1>
              <p>Ayo bergabung kedalam suatu komunitas untuk dapat
                 menjalakan aksi cinta bumi melalui aplikasi yang
                 kembangkan
              </p>
              <button class="Daftar">Daftar</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About2 Section -->
    <section id="about2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 layanan-tagline">
            <div class="content w-100">
              <h1>Ciptakan Kegiatan Untuk Komunitas Kamu</h1>
              <p>Ayo bergabung kedalam suatu komunitas
              untuk dapat menjalakan aksi cinta bumi
              melalui aplikasi yang kembangkan.
              </p>
            </div>
          </div>
          <div class="col-md-6 hero-tagline d-flex ">
            <img src="<?=base_url()?>assets/img/kanan utama.jpg" alt="" style="width:533px; margin-left: 81px;" />
          </div>
        </div>
      </div>
    </section>

    <!--Footer -->
    <footer id="footer" class="text-center text-lg-start" >
      <!-- Section: Links  -->
      <section class="container-fluid p-1 text-end" id="contact-us">
        <div class="container-fluid text-center text-md-start mt-3  ">
          <!-- Grid row -->
          <div class="row md-3 justify-content-end">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <a>
                <img src="<?=base_url()?>assets/img/icon logo 1.png" alt="" />
              </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4" style="color: #fff;">
                Layanan Kami
              </h6>
              <p class="footer-links">
                <a class="a-footer" href="#">Tentang Kami</a><br>
                <a class="a-footer" href="#">Pusat Bantuan</a><br>
                <a class="a-footer" href="#">Kerjasama</a><br>
                <a class="a-footer" href="#">Donasi</a><br>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 ms-auto"style="text-align:left;">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4" style="color: #fff;"> Informasi Kontak</h6>
              <p style="color:#fff"><i class="fa-brands fa-instagram me-3" style="color: #fff;"></i> Relawanin</p>
              <p style="color:#fff"><i class="fas fa-home me-3" style="color: #fff;"></i> Jalan telekomunikasi</p>
              <p style="color:#fff">
                <i class="fas fa-envelope me-3 " style="color: #fff;"></i> relawain@gmail.com</p>
              <p style="color:#fff"><i class="fas fa-phone me-3 " style="color: #fff;"></i> +62 812-3989-290</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
  <!-- Copyright -->
  <div class="text-center p-3 text-white">
      © 2023 Copyright Relawanin
  </div>
  <!-- Copyright -->
</footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>