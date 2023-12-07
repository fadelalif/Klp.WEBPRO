<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Relawanin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/form.css" />

    <style>
      body {
        background: #f1f1f1;
      }
    </style>
  </head>

  <body>
    <!-- navbar -->
    <nav>
      <?php include 'application/views/navLogin.php'; ?>
    </nav>
    <!-- end navbar -->

    <div class="container w-100 bg-white h-auto">
      <div class="row">
        <div class="col">
          <img src="<?= base_url() ?>assets/img/1.png" class="me-2" alt="No" />
          Isi Data Diri
          <img
            src="<?= base_url() ?>/assets/img/Expand_right.png"
            class=""
            alt="next"
          />
        </div>

        <div class="col">
          <img src="<?= base_url() ?>assets/img/2.png" class="me-2" alt="No" />
          Konfirmasi
          <img src="<?= base_url() ?>assets/img/Expand_right.png" alt="next" />
        </div>
      </div>

      <div class="img-fluid mt-5 text-center pb-5 pt-5">
        <img src="<?= base_url() ?>assets/img/Relawan.png" alt="Foto_Content" />
      </div>

      <form class="row g-3 w-auto mx-5">
        <div class="col-md-6">
          <label for="inputNamaKegiatan" class="form-label"
            >Nama Kegiatan</label
          >
          <input
            type="Name"
            class="form-control"
            id="inputNama"
            placeholder="Teens Go Green Volunteers"
          />
        </div>
        <div class="col-md-6">
          <label for="inputEmail" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="inputEmail4"
            placeholder="alifsss@gmail.com"
          />
        </div>
        <div class="col-md-6">
          <label for="inputNomor" class="form-label">Nomor Telepon</label>
          <input
            type="text"
            class="form-control"
            id="inputNoTelp"
            placeholder="08125343586"
          />
        </div>
        <div class="form-group">
          <label for="comment"
            >Mengapa anda tertarik untuk aktivitas ini?</label
          >
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
          <label for="Pengalaman">Apa Pengalamanmu?</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="file">Upload CV anda Disini!</label>
            <br />
            <input type="file" id="file" name="file" multiple />
          </div>
        </form>
      </form>

      <div class="mt-4" style="text-align: center; padding-bottom: 15px">
        <button type="submit" class="btn MasukBut">Kirim</button>
      </div>
    </div>

    <!-- footer -->
    <div>
      <?php include 'application/views/footer.php'; ?>
    </div>
    <!-- end footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>