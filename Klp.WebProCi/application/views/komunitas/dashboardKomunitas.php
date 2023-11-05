<!DOCTYPE html>
<html lang="en">

<head>
  <title>Relawanin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDashboard.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
        $(".headDash-tagline").fadeIn(1000); 
        });


        $(window).scroll(function() {
        var scrollPos = $(this).scrollTop();
        var windowHeight = $(this).height();

        $(".card-body").each(function(i) {
            var elemPos = $(this).offset().top;

            // akan muncul effect ketika sudah pada section yang dituju
            if (scrollPos + windowHeight > elemPos && !$(this).is(':visible')) {
                $(this).delay(500 * i).fadeIn(1000);
            }
        });

        
      });
  </script>
</head>

<body>
  <div>
    <?php include 'application/views/navKomunitas.php'; ?>
  </div>
  <!-- HEADER  -->

  <section id="headDash" style="position: relative;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 " style="height: 650px;" src="<?= base_url() ?>assets/img/hutan.jpg" alt="">
          <h1 class="headerDash">Kami Membutuhkan Anda!</h1>
          <p class="headerDescDash">Gabung kedalam sebuah kegiatan dan aksikan cintamu terhadap lingkungan</p>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 " style="height: 650px;" src="<?= base_url() ?>assets/img/gunung.jpg" alt="">
          <h1 class="headerDash">Mari Perbaiki Bersama</h1>
          <p class="headerDescDash">Gabung kedalam sebuah kegiatan dan aksikan cintamu terhadap lingkungan</p>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 " style="height: 650px;" src="<?= base_url() ?>assets/img/pantai.jpg" alt="">
          <h1 class="headerDash">Ayo, Jaga Bumi Kita</h1>
            <p class="headerDescDash">Gabung kedalam sebuah kegiatan dan aksikan cintamu terhadap lingkungan</p>
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
  </section>
  <!-- HEADER  -->
  <!-- FITUR  -->
  <section id="fitur">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-4 g-4 " style="padding: 25px;">
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100" style="width: 305px; height: 422px; border-radius: 20px; background: #00897B;">
            <div class="card-body"style="display:none;">
              <p class="card-text pfitur1">Kami menghubungkan anda dengan relawan, kegiatan anda telah ditunggu para relawan untuk diikuti</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/DaftarKegiatan">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Buat Kegiatan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body"style="display:none;">
              <img src="<?= base_url() ?>assets/img/fitur 2.png" alt="" />
              <h5 class="card-title hfitur2">Donasi</h5>
              <p class="card-text pfitur2">Anda dapat mengumpulkan donasi dari para relawan untuk mendukung kegiatan komunitas anda</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Buat Donasi</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body" style="display:none;">
              <img src="<?= base_url() ?>assets/img/fitur 3.png" alt="" />
              <h5 class="card-title hfitur3"> Riwayat Kegiatan</h5>
              <p class="card-text pfitur3">Anda dapat memeriksa riwayat kegiatan yang telah dibuat</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/RegisterKomunitas">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Riwayat</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body" style="display:none;">
              <img src="<?= base_url() ?>assets/img/fitur 4.png" alt="" />
              <h5 class="card-title hfitur4">Panduan</h5>
              <p class="card-text pfitur4">Masih bingung dengan layanan yang tersedia? kami menyediakan panduan untuk
                kamu</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Cek Panduan</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FITUR  -->

  <!-- MSG  -->
  <section id="msgDash" style="position: relative;">
    <div class="container-fluid align-items-center">
      <div class="row">
        <div class="col-md-12 headDash-tagline text-center" style="margin-bottom: 74px; margin-top:64px; padding: 0;">
          <h1 class="msgDash">Buat Keigatan Untuk Memperbaiki Bumi</h1>
          <p class="msgDescDash">Buat kegiatan yang menarik dan bermanfaat bagi bumi dan lingkungan sekitar</p>
        </div>
      </div>
    </div>
  </section>
  <!-- MSG  -->

  <!-- CARD KEGIATAN -->
  <section id="cardKat">
    <ul class="nav nav-tabs" id="myTabs">
    <li class="nav-item">
      <a class="nav-link active" id="card1-tab" data-bs-toggle="tab" href="#card1" role="tab" aria-controls="card1" aria-selected="true" style="color: #00897b;">Kategori 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="card2-tab" data-bs-toggle="tab" href="#card2" role="tab" aria-controls="card2" aria-selected="false" style="color: #00897b;">Kategori 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="card3-tab" data-bs-toggle="tab" href="#card3" role="tab" aria-controls="card3" aria-selected="false" style="color: #00897b;">Kategori 3</a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="card1" role="tabpanel" aria-labelledby="card1-tab">
    <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 25px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
    <div class="tab-pane fade" id="card2" role="tabpanel" aria-labelledby="card2-tab">
    <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 25px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
    <div class="tab-pane fade" id="card3" role="tabpanel" aria-labelledby="card3-tab">
    <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 25px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
  </div>

  </section>

  <!-- news -->
  <section>
    <div class="container-fluid">
      <h1 style="color:#00897b;">Berita</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 25px;">
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer content than the first to show that equal
                height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer content than the first to show that equal
                height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer -->
  <?php include 'application/views/footer.php'; ?>
  <!--Footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>