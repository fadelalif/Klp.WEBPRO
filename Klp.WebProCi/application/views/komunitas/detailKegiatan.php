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
  <section id="detailKegiatan" style="position: relative;padding-top: 75px;">
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
      <div class="row" style="padding:0px 122px;">
        <div class="col-md-12">
          <h2 style="font-size: 20px; ">Kategori: <span style="color:#00897b;">
              <?= $kegiatan->kategori ?>
          </h2>
        </div>
      </div>
      <div class="row" style="padding:20px 122px; ">
        <div class="col-md-12" style="background-color:#DADADA;">
          <!-- <h2 style="font-size:25px;">Oleh <span style="color:#00897b;">
              <?= $kegiatan->nama_komunitas ?>
          </h2> -->
          <h3 style="padding-top:15px;">Aktivitas</h3>
          <p style="width: 100%;">
            <?= $kegiatan->aktivitas_kegiatan ?>
          </p>
          <h3 style="padding-top:10px;">Deskripsi</h3>
          <p style="width: 100%;">
            <?= $kegiatan->deskripsi_kegiatan ?>
          </p>
          <h3 style="padding-top:10px;">Ketentuan</h3>
          <p style="width: 100%;">
            <?= $kegiatan->ketentuan ?>
          </p>
        </div>
      </div>
      <div class="row" style="padding:20px 122px; padding-right:122px;">
        <div class="col-md-6" id="masaRegis" style="background-color:#DADADA">
          <h4 style="padding-top:15px;"><i class="fa-solid fa-calendar-days"
              style="min-height: 41.667px; color: #00897b; margin-right:10px;"></i>Tanggal Kegiatan: <span
              style="font-weight: 600;">
              <?php
              // Mengonversi tanggal 
              $formattedDate = date('d F Y', strtotime($kegiatan->tanggal_kegiatan));
              echo $formattedDate;
              ?>
          </h4>
          <h4><i class="fa-solid fa-location-dot"
              style="min-height: 41.667px; color: #00897b; margin-right:10px;"></i>Lokasi Kegiatan: <span
              style="font-weight: 600;">
              <?= $kegiatan->lokasi_kegiatan ?>
          </h4>
          <h4 style="color: red;"><i class="fa-solid fa-triangle-exclamation"
              style="min-height: 41.667px; color: #F50320; margin-right:10px;"></i>Batas Registrasi: <span
              style="font-weight: 600;">
              <?php
              // Mengonversi tanggal 
              $formattedDate = date('d F Y', strtotime($kegiatan->batas_daftar));
              echo $formattedDate;
              ?>
          </h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="">
          <div id="btn" class="justify-content-sm-center">
            <!-- Button trigger modal -->
            <button id="btnRegis" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
              style="margin-bottom:19px; width: 250px; height: 60px;">
              Bergabung
            </button>
            <button class="btnHubOrg" style="width: 250px; height: 60px;">Hubungi Organisasi</button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Aktivitas</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" enctype="multipart/form-data" role="form"
                    action="<?php echo site_url('/DbRelawan/insert'); ?>">
                    <div class="form group">
                      <label>Nama Kegiatan</label>
                      <input type="Name" name="nama" class="form-control" placeholder="Teens Go Green Volunteers" />
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama" aria-label="Nama"
                        aria-describedby="basic-addon1" />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email"
                        aria-describedby="basic-addon1" />
                    </div>
                    <div class="form-group">
                      <label class="form-label">Nomor Telepon</label>
                      <input type="text" name="no_tlp" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Mengapa anda tertarik untuk aktivitas ini?</label>
                      <textarea name="alasan" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Apa Pengalamanmu?</label>
                      <textarea name="pengalaman" class="form-control" rows="5"></textarea>
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
  </section>
  <!--Footer -->
  <?php include 'application/views/footer.php'; ?>
  <!--Footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>