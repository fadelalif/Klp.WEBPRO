<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Relawanin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleUtama.css">
</head>

<body>
  <!-- Navbar -->
  <div>
    <?php include 'nav.php'; ?>
  </div>
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
              <img src="<?= base_url() ?>assets/img/ios-android 1.jpg" alt="" style="width: 200px; border-radius:8%" />
            </button>
            <button class="download-button2">
              <img src="<?= base_url() ?>assets/img/ios-android 2.jpg" alt="" style="width: 200px; border-radius:8%" />
            </button>
          </div>
        </div>
        <div class="col-md-6 hero-tagline d-flex justify-content-end">
          <img src="<?= base_url() ?>assets/img/image 2.png" alt=""
            style="width:533px; padding-top: 100px; margin-right: 49px;" />
        </div>
      </div>
    </div>
  </section>
  <!-- Layanan Section -->
  <section id="layanan">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 hero-tagline d-flex ">
          <img src="<?= base_url() ?>assets/img/kiri utama.jpg" alt="" style="width:533px; margin-left: 81px;" />
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
          <img src="<?= base_url() ?>assets/img/kanan utama.jpg" alt="" style="width:533px; margin-left: 81px;" />
        </div>
      </div>
    </div>
  </section>

  <!--Footer -->
  <?php include 'footer.php'; ?>
  <!--Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>