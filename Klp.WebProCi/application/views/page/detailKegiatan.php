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
          <p><i class="fa-solid fa-calendar-days"
              style="color: #00897b; margin-right:10px;"></i>14 September - 30 September 2020</p>
          <p><i class="fa-solid fa-location-dot"
              style="color: #00897b; margin-right:10px;"></i>Karawang</9>
          <p style="color: #F50320;"><i class="fa-solid fa-triangle-exclamation"
              style="color: #F50320; margin-right:10px;"></i>Batas registrasi 30 September 2020
          <p>
          <div id="btn" class="justify-content-sm-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-bottom:19px; width: 250px; height: 60px;">
            Bergabung
            </button>
            <button class="btnHubOrg" style="width: 250px; height: 60px;">Hubungi Organisasi</button>
          </div>
            <!-- Modal -->
            <div class="modal fade  modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Aktivitas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="form group">
                        <label>Nama Kegiatan</label>
                        <input type="Name" name="name" class="form-control"placeholder="Teens Go Green Volunteers"/>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email"name="email"class="form-control" placeholder="alifsss@gmail.com"/>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text"name="noTlp"class="form-control"placeholder="08125343586"/>
                      </div>
                      <div class="form-group">
                        <label>Mengapa anda tertarik untuk aktivitas ini?</label>
                        <textarea name="alasan"class="form-control" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Apa Pengalamanmu?</label>
                        <textarea name="pengalaman"class="form-control" rows="5"></textarea>
                      </div>

                      <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="file">Upload CV anda Disini!</label>
                          <br />
                          <input type="file" name="file" multiple />
                        </div>
                      </form>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-primary">Kirim Form Pendaftaran</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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