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
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardBerita.css">

</head>

<body>
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <!-- HEADER  -->
  <section id="headDash" style="position: relative;">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
          <img src="<?= base_url() ?>assets/img/hutan.jpg" alt=""
            style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
          <h1 class="headerDash">Kami Membutuhkan Anda!</h1>
          <p class="headerDescDash">Gabung kedalam sebuah kegiatan dan aksikan cintamu terhadap lingkungan</p>
        </div>
      </div>
    </div>
  </section>
  <!-- HEADER  -->
  <!-- FITUR  -->
  <section id="fitur">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-4 g-4 " style="padding: 25px;">
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100" style="width: 305px; height: 422px; border-radius: 20px; background: #00897B;">
            <div class="card-body">
              <p class="card-text pfitur1">Kami menghubungkan anda dengan komunitas, dengan itu bentuk nyata
                akan terwujud bagi lingkungan</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/CariKegiatan">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Cari Kegiatan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
              <img src="<?= base_url() ?>assets/img/fitur 2.png" alt="" />
              <h5 class="card-title hfitur2"> Jadi Relawan </h5>
              <p class="card-text pfitur2">Minat menjadi relawan? cari kegiatan yang berada disekitarmu, kemudian
                daftarkan dirimu</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Daftar Relawan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
              <img src="<?= base_url() ?>assets/img/fitur 3.png" alt="" />
              <h5 class="card-title hfitur3"> Jadi Komunitas </h5>
              <p class="card-text pfitur3">Daftarkan komunitasmu di platform kami, dan dapatkan keuntungan untuk
                komunitas yang dikelola</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Kelola
                  Komunitas</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
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
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-12 headDash-tagline text-center" style="margin-bottom: 74px; margin-top:64px; padding: 0;">
          <h1 class="msgDash">Banyak kegiatan yang bisa kamu ikuti</h1>
          <p class="msgDescDash">Ikuti kegiatan yang cocok denganmu, dan lihat lokasinya</p>
        </div>
      </div>
    </div>
  </section>
  <!-- MSG  -->

  <!-- CARD KEGIATAN -->
  <section id="cardKegiatan">
    <div class="container-fluid" style="background-color: #DADADA">
      <h5 style="padding-left:10px;">Rekomendasi</h5>
      <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 25px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
  </section>
  <section id="cardKat">
    <ul class="nav nav-tabs" id="myTabs">
      <li class="nav-item">
        <a class="nav-link active" id="card1-tab" data-bs-toggle="tab" href="#card1" role="tab" aria-controls="card1"
          aria-selected="true" style="color: #00897b;">Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="card2-tab" data-bs-toggle="tab" href="#card2" role="tab" aria-controls="card2"
          aria-selected="false" style="color: #00897b;">Projek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="card3-tab" data-bs-toggle="tab" href="#card3" role="tab" aria-controls="card3"
          aria-selected="false" style="color: #00897b;">Webinar</a>
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
    <div class="mt-4" style="text-align: center">
      <a href="<?= base_url() ?>index.php/Dashboard" class="btn LainnyaBut">Lainnya</a>
    </div>
  </section>

  <!-- news -->
  <section id="cardBerita">
    <div class="container-fluid">
      <h5 style="padding-left:10px;">Berita</h5>
      <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 25px;">
        <?php include 'application/views/cardBerita.php'; ?>
        <?php include 'application/views/cardBerita.php'; ?>
        <?php include 'application/views/cardBerita.php'; ?>
        <?php include 'application/views/cardBerita.php'; ?>
      </div>
    </div>
  </section>
  <!--Footer -->
  <?php include 'application/views/footer.php'; ?>
  <!--Footer -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>