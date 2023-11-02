<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail Kegiatan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDashboard.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <section id="cardKegiatan" style="position: relative;padding-top: 75px;">
    <div class="container-fluid">
      <div class="row" style="padding:20px 122px;">
        <div class="col-md-12">
          <h1 style="padding-left:10px;">Karawang Peduli</h1>
          <img id="img1" src="<?= base_url() ?>assets/img/cardKeg 1.png" alt=""
            style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
        </div>
      </div>
      <div class="row" style="padding:20px 122px; ">
        <div class="col-md-12" style="background-color:#DADADA;">
          <h2 style="padding-top:19px">Oleh <span style="color: #00897B;">Karawang Peduli</h2>
          <h3 style="padding-top:37px;">Deskripsi</h3>
          <h4 style="width: 100%;">Teens Go Green Indonesia membuka pendaftaran Volunteers bagi kamu yang ingin terlibat
            menjadi bagian dari
            Teens Go Green Indonesia. Volunteers yang terdaftar nantinya akan dilibatkan dalam program Teens Go Green
            Indonesia diantaranya #DigitalCampaigner dan Kelas Belajar Lingkungan atau menjadi bagian dari Volunteers
            Teens Go Green Indonesia untuk terlibat di banyak project lingkungan setelah pandemi berakhir.</h4>
          <h3 style="padding-top:37px;">Aktivitas</h3>
          <h4 style="width: 100%;">Volunteers diharapkan menjadi Green Leaders atau pembawa virus cinta lingkungan untuk
            menyebarkan semangat positif menjaga lingkungan ke sekitarnya.</h4>
          <h3 style="padding-top:37px;">Ketentuan</h3>
          <h4 style="width: 100%;">
            <ul>
              <li>Pemuda dan pemudi aktif usia 17-24 tahun</li>
              <li>Berkewarganegaraan Indonesia</li>
              <li>Sehat Jasmani dan rohani</li>
              <li>Berdomisili di Bandung lebih diutamakan</li>
              <li>Memiliki minat dan kepedulian terhadap isu lingkungan di Indonesia dan skala global</li>
              <li>Memiliki social media dan aktif menggunakan social media untuk gerakan perubahan yang positif</li>
            </ul>
          </h4>
        </div>
      </div>
      <div class="row" style="padding:20px 122px; padding-right:122px;">
        <div class="col-md-6" style="background-color:#DADADA;">
          <h4>14 September - 30 September 2020</h4>
          <h4>Karawang</h4>
          <h4>Batas registrasi 30 September 2020</h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="">
          <div class=" justify-content-md-end">
            <button class="btn" style="width: 420px; height: 82px;">Bergabung</button>
            <button class="btn" style="width: 420px; height: 82px;">Hubungi Organisasi</button>
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