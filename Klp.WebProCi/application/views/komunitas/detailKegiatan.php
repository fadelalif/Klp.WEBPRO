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
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDetailKegiatan.css">
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
          <h1 style="padding-left:10px;">
            <?= $kegiatan->nama_kegiatan ?>
          </h1>
          <img id="img1" src="<?= base_url() ?>uploads/<?= isset($kegiatan->uploadFile) ? $kegiatan->uploadFile : '' ?>"
            alt="" style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
        </div>
      </div>
      <div class="row" style="padding:20px 122px; ">
        <div class="col-md-12" style="background-color:#00897B;">
          <h2 style="padding-top:19px; color:#fff ">Oleh <span style=";">Karawang Peduli</h2>
          <h4 style="padding-top:37px; color:#fff">Deskripsi</h4>
          <p style="width: 100%;">
            <?= $kegiatan->deskripsi_kegiatan ?>
          </p>
          <h4 style="padding-top:37px;color:#fff">Aktivitas</h4>
          <p style="width: 100%;">
            <?= $kegiatan->aktivitas_kegiatan ?>
          </p>
          <h4 style="padding-top:37px;color:#fff">Lokasi</h4>
          <p style="width: 100%;">
            <?= $kegiatan->lokasi_kegiatan ?>
          </p>
          <h4 style="padding-top:37px;color:#fff">Tanggal Kegiatan</h4>
          <p style="width: 100%;">
            <?= $kegiatan->tanggal_kegiatan ?>
          </p>
          <h3 style="padding-top:37px; color:#fff">Ketentuan</h3>
          <p style="width: 100%;">
          <ul>
            <li>Pemuda dan pemudi aktif usia 17-24 tahun</li>
            <li>Berkewarganegaraan Indonesia</li>
            <li>Sehat Jasmani dan rohani</li>
            <li>Berdomisili di Bandung lebih diutamakan</li>
            <li>Memiliki minat dan kepedulian terhadap isu lingkungan di Indonesia dan skala global</li>
            <li>Memiliki social media dan aktif menggunakan social media untuk gerakan perubahan yang positif</li>
          </ul>
          </p>
        </div>
      </div>
      <div class="row" style="padding:20px 122px; padding-right:122px;">
        <div class="col-md-6" id="masaRegis">
          <h4 style="padding-top:15px;color:#00897B;">14 September - 30 September 2020</h4>
          <h4 style="color:#00897B;">Karawang</h4>
          <h4 style="color:#00897B;">Batas registrasi 30 September 2020</h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="">
          <div class=" justify-content-md-end">
            <button id="btnregis" class="btn" style="width: 250px; height: 75px;">Bergabung</button>
            <button id="btnregis" class="btn" style="width: 250px; height: 75px;">Hubungi Organisasi</button>
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