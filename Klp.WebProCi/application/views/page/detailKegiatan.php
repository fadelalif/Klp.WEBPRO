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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <section id="detailKegiatan" style="position: relative;padding-top: 75px;">
    <div class="container-fluid">
      <div class="row" style="padding:20px 122px;">
        <div class="col-md-12">
          <h1 style="padding-left:10px;">Karawang Peduli</h1>
          <img id="img1" src="<?= base_url() ?>assets/img/cardKeg 1.png" alt=""
            style="width: 100%; height: auto; flex-shrink: 0;" />
        </div>
      </div>
      <div class="row" style="padding:20px 122px; ">
        <div class="col-md-12" style="background-color:#DADADA;">
          <h2 style="padding-top:19px">Oleh <span style="color: #00897B; font-weight: 700;">Karawang Peduli</h2>
          <h3 style="padding-top:37px;">Deskripsi</h3>
          <h4 style="width: 100%;">Teens Go Green Indonesia membuka pendaftaran Volunteers bagi kamu yang ingin terlibat
            menjadi bagian dari
            Teens Go Green Indonesia. Volunteers yang terdaftar nantinya akan dilibatkan dalam program Teens Go Green
            Indonesia diantaranya #DigitalCampaigner dan Kelas Belajar Lingkungan atau menjadi bagian dari Volunteers
            Teens Go Green Indonesia untuk terlibat di banyak project lingkungan setelah pandemi berakhir.</p>
            <h3 style="padding-top:37px;">Aktivitas</h3>
            <h4 style="width: 100%;">Volunteers diharapkan menjadi Green Leaders atau pembawa virus cinta lingkungan
              untuk
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
      <div class="row" style="padding:20px 122px 37px 122px;">
        <div class="col-md-6" style="background-color:#DADADA; padding: 16px;">
          <h4><i class="fa-solid fa-calendar-days"
              style="min-height: 41.667px; color: #00897b; margin-right:10px;"></i>14 September - 30 September 2020</h4>
          <h4><i class="fa-solid fa-location-dot"
              style="min-height: 41.667px; color: #00897b; margin-right:10px;"></i>Karawang</h4>
          <h4 style="color: #F50320;"><i class="fa-solid fa-triangle-exclamation"
              style="min-height: 41.667px; color: #F50320; margin-right:10px;"></i>Batas registrasi 30 September 2020
          </h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="">
          <div class="justify-content-md-end">
            <div>
              <a href="<?= base_url() ?>index.php/FormGabungKegiatan">
                <button class="btn bergabung" style="margin-bottom:19px; width: 420px; height: 82px;">Bergabung</button>
            </div>
            <button class="btn hubOrg" style="width: 420px; height: 82px;">Hubungi Organisasi</button>
          </div>
        </div>
      </div>
      <div class="row" style="padding:20px 122px 37px 122px;">
        <div class="col-md-12">
          <h3>Galeri</h3>
          <div class="galeri">
            <div id="galeriContainer" style="display: flex; justify-content: space-between;">
              <img src="<?= base_url() ?>assets/img/galeri1.jpg" alt="" />
              <img src="<?= base_url() ?>assets/img/galeri2.jpg" alt="" />
            </div>
            <nav class="galeriSlide" aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item" data-img="<?= base_url() ?>assets/img/galeri1.jpg"><a class="page-link">1</a></li>
                <li class="page-item" data-img="<?= base_url() ?>assets/img/galeri2.jpg"><a class="page-link">2</a></li>
                <a class="page-link" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row" style="padding:20px 122px 37px 122px;">
        <h3>Ulasan</h3>
        <div class="col-md-1" style="padding: 16px;">
          <img src="<?= base_url() ?>assets/img/iconProf.png" alt="" />
        </div>
        <div class="col-md-7" style="margin: 0px 0px 0px 23px;">
          <h5>Marsya(18 tahun)</h5>
          <h6>Kegiatan yang sangat bermanfaat dan bagus untuk diikuti!</h6>
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