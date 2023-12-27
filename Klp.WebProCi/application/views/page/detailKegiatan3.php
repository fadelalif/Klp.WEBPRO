<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Kegiatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
  crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDetailKegiata.css">
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
          <img src="<?= base_url() ?>assets/img/cardKeg3.jpg" clas s="img-fluid rounded-4" style="max-width: 800px;" alt="Foto_Content" />
        </div>
        <div class="w-auto h-min ms-5 ps-3 mt-5 ">
            <h5>DESKRIPSI KEGIATAN</h5>
            <div class=>
              <p>Komunitas SampahKita membuka pendaftaran bagi para relawan yang ingin mengikuti
            workshop pengolahan sampah. Pada workshop kali ini
            kami juga akan membagikan tips dan cara mengolah sampah yang bermanfaat bagi lingkungan dan rumah tangga
            anda.</p>
            </div>
            <br>  

            <h5>Aktivitas</h5>
            <p>Relawan yang ingin mengikuti workshop ini diharapkan mulai mengolah sampah rumah
            tangga sendiri
            dan dapat bermanfaat bagi diri sendiri dan lingkungan sekitar.</p>
            <br>

            <h5>KETENTUAN</h5>
            <ul>
              <li>Berkewarganegaraan Indonesia</li>
              <li>Sehat Jasmani dan rohani</li>
              <li>Berdomisili di Lampung lebih diutamakan</li>
              <li>Memiliki minat dan kepedulian terhadap isu lingkungan di Indonesia dan skala global</li>
              <li>Memiliki social media dan aktif menggunakan social media untuk gerakan perubahan yang positif</li>
            </ul>
        </div>
      </div>
      <div class="col-6 col-md-4 h-min mt-5 pt-5 pe-5 ">
        <div class="card border-white shadow p-3 mb-5 bg-body-tertiary rounded-4 bg-white mt-4 ">
          <div class="mb-3">
          <h3>Olah Sampah</h3>
          </div>
          <p><i class="fa-solid fa-calendar-days"
              style="color: #00897b; margin-right:10px;"></i>15 Maret - 30 Maret 2022</p>
          <p><i class="fa-solid fa-location-dot"
              style="color: #00897b; margin-right:10px;"></i>Lampung</9>
          <p style="color: #F50320;"><i class="fa-solid fa-triangle-exclamation"
              style="color: #F50320; margin-right:10px;"></i>Batas registrasi 30 Maret 2022
          <p>
          <div id="btn" class="justify-content-sm-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-bottom:19px; width: 250px; height: 60px;">
            Bergabung
            </button>
            <button class="btnHubOrg" style="width: 250px; height: 60px;">Hubungi Organisasi</button>
          </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Aktivitas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?= base_url() ?>index.php/KomunitasCRUD">
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
                      <div class="mb-3">
                        <label for="file">Upload CV anda Disini!</label>
                        <br />
                        <input type="file" name="file" multiple />
                      </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>