<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relawanin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
  crossorigin="anonymous"
  />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDetailKegiata.css">
</head>
<body>
  <!-- navbar -->
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <!-- end navbar -->

  <div class="container-fluid m-0 mt-5 mt-lg-0" style=" background-color: #f6f4f4" >
    <div class="row w-auto h-auto pb-5 pt-5">
      <div class="col-md-8 pe-2 mt-5">
        <div class="img-fluid mt-5 text-center pt-5">
          <img src="<?= base_url() ?>assets/img/Relawan.png" class="img-fluid rounded-4" style="max-width: 800px;" alt="Foto_Content" />
        </div>
        <div class="w-auto h-min ms-5 ps-3 mt-5 ">
            <h5>DESKRIPSI KEGIATAN</h5>
            <div class=>
              <p>Teens Go Green Indonesia membuka pendaftaran Volunteers bagi kamu yang ingin terlibat
            menjadi bagian dari
            Teens Go Green Indonesia. Volunteers yang terdaftar nantinya akan dilibatkan dalam program Teens Go Green
            Indonesia diantaranya #DigitalCampaigner dan Kelas Belajar Lingkungan atau menjadi bagian dari Volunteers
            Teens Go Green Indonesia untuk terlibat di banyak project lingkungan setelah pandemi berakhir.</p>
            </div>
            <br>

            <h5>KETENTUAN</h5>
            <ul>
              <li>Pemuda dan pemudi aktif usia 17-24 tahun</li>
              <li>Berkewarganegaraan Indonesia</li>
              <li>Sehat Jasmani dan rohani</li>
              <li>Berdomisili di Bandung lebih diutamakan</li>
              <li>Memiliki minat dan kepedulian terhadap isu lingkungan di Indonesia dan skala global</li>
              <li>Memiliki social media dan aktif menggunakan social media untuk gerakan perubahan yang positif</li>
            </ul>
        </div>
      </div>
      <div class="col-6 col-md-4 h-min mt-5 pt-5 pe-5 ">
        <div class="card border-white shadow p-3 mb-5 bg-body-tertiary rounded-4 bg-white mt-4 ">
          <div class="mb-3">
          <h3>Relawan Karawang Peduli</h3>
          </div>
          <p><i class="fa-solid fa-calendar-days"
              style="color: #00897b; margin-right:10px;"></i>14 September - 30 September 2020</p>
          <p><i class="fa-solid fa-location-dot"
              style="color: #00897b; margin-right:10px;"></i>Karawang</9>
          <p style="color: #F50320;"><i class="fa-solid fa-triangle-exclamation"
              style="color: #F50320; margin-right:10px;"></i>Batas registrasi 30 September 2020
          <p>
          <div id="btn" class="justify-content-sm-center">
            <button class="btnBergabung" style="margin-bottom:19px; width: 250px; height: 60px;">Bergabung</button>
            <button class="btnHubOrg" style="width: 250px; height: 60px;">Hubungi Organisasi</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- footer -->
  <div>
    <?php include 'application/views/footer.php'; ?>
  </div>
  <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>