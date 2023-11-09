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
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styledetailKegiatan.css">
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
          <h1 style="padding-left:10px;">Olah Sampah</h1>
          <img id="img1" src="<?= base_url() ?>assets/img/cardKeg3.jpg" alt=""
            style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
        </div>
      </div>
      <div class="row" style="padding:20px 122px; ">
        <div class="col-md-12" style="background-color:#00897B;">
          <h2 style="padding-top:19px; color:#fff ">Oleh <span style=";">SampahKita</h2>
          <h4 style="padding-top:37px; color:#fff">Deskripsi</h4>
          <p style="width: 100%;">Komunitas SampahKita membuka pendaftaran bagi para relawan yang ingin mengikuti workshop pengolahan sampah. Pada workshop kali ini 
            kami juga akan membagikan tips dan cara mengolah sampah yang bermanfaat bagi lingkungan dan rumah tangga anda. </p>
          <h4 style="padding-top:37px;color:#fff">Aktivitas</h4>
          <p style="width: 100%;">Relawan yang ingin mengikuti workshop ini diharapkan mulai mengolah sampah rumah tangga sendiri 
           dan dapat bermanfaat bagi diri sendiri dan lingkungan sekitar.</p>
          <h3 style="padding-top:37px; color:#fff">Ketentuan</h3>
          <p style="width: 100%;">
            <ul>
              <li>Berkewarganegaraan Indonesia</li>
              <li>Sehat Jasmani dan rohani</li>
              <li>Berdomisili di Lampung lebih diutamakan</li>
              <li>Memiliki minat dan kepedulian terhadap isu lingkungan di Indonesia dan skala global</li>
              <li>Memiliki social media dan aktif menggunakan social media untuk gerakan perubahan yang positif</li>
            </ul>
          </p>
        </div>
      </div>
      <div class="row" style="padding:20px 122px; padding-right:122px;">
        <div class="col-md-6" id="masaRegis">
          <h4 style="padding-top:15px;color:#00897B;">15 Maret - 30 Maret 2022</h4>
          <h4 style="color:#00897B;">Lampung</h4>
          <h4 style="color:#00897B;">Batas registrasi 30 Maret 2022</h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="">
          <div class=" justify-content-md-end">
            <button id="btnregis"class="btn" style="width: 250px; height: 75px;">Bergabung</button>
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