<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styledashboard.css" />
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    margin-top: 60px;
    width: 100%;
    height: 600px;
  }
  </style>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg position-fixed w-100" style="z-index: 1000;">
      <div class="container-fluid mx-3">
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
          <div>
          <i id= "right"class="fa-regular fa-user fa-xl" style="color: #fff;"></i>
          </div>
        </div>
      </div>
    </nav>   
</div>
<div id="demo" class="carousel slide position-relative" style="z-index: 1;" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/img/hutan.png" alt="Hutan" width="100" height="100">
      <div class="carousel-caption d-none d-md-block">
        <h5>SUNDAY FOREST DAY</h5>
        <p>Ikuti keseruan membersihkan hutan dari sampah dan penanaman pohon kembali</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/gunung.jpg" alt="Gunung" width="100" height="100">
      <div class="carousel-caption d-none d-md-block">
        <h5>CLEAN AND TRAKING</h5>
        <p>Ikuti keseruan membersihkan gunung sekaligus merasakan traking di gunung bromo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/pantai.jpg" alt="Pantai" width="100" height="100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bersih-Bersih Pantai</h5>
        <p>Ikuti keseruan membersihkan pantai dan pelepasan tukik di pantai karimun jawa</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- card -->
<section id="card">
    <div class="container-fluid">
        <h5>Kategori</h5>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 25px;">
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>  
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body" >
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
        </div>
        <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body" >
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
        </div>
        <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
          <div class="col"style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- news -->
<section>
    <div class= "container-fluid">
        <h5 style="color:#00897b;">Berita</h5>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 25px;">
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>  
          <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body" >
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
        </div>
        <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body" >
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
        </div>
        <div class="col" style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
          <div class="col"style="padding: 10px;">
            <div class="card h-100">
                <img class="card-img-top" src="<?=base_url()?>assets/img/hutan.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="color:#000;">Card title</h5>
                <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">see more</small>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>

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
                <a class="a-footer" href="#Utama">Tentang Kami</a><br>
                <a class="a-footer" href="#Tentang">Pusat Bantuan</a><br>
                <a class="a-footer" href="#Fitur">Kerjasama</a><br>
                <a class="a-footer" href="#Berita">Donasi</a><br>
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
