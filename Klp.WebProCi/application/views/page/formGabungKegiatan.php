<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleFormGabungKegiatan.css">
    <style>
        body {
            background: #F1F1F1;
        }
    </style>
</head>

<body class="m-0 p-0">
    <div class="body bg-body-secondary">
        <nav class="navbar navbar-expand-lg bg-body shadow">
            <div class="container-fluid bg-white m-2">
                <img src="<?= base_url() ?>assets/img/relawain logo 1 (1).png" alt="logo">
                <div class="collapse navbar-collapse text-center justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <div class="row row-cols-3 row-cols-lg-4 g-1 g-lg-1 gap-3">
                            <div class="col-4">
                                <div class="mx-5 w-100">
                                    <img src="<?= base_url() ?>assets/img/1.png" class="m-1" alt="No">
                                    Isi Data Diri
                                    <img src="<?= base_url() ?>assets/img/Expand_right.png" alt="next">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mx-5 w-100">
                                    <img src="<?= base_url() ?>assets/img/2.png" class="m-1" alt="No">
                                    Isi Data Pendukung
                                    <img src="<?= base_url() ?>assets/img/Expand_right.png" alt="next">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mx-5 w-100">
                                    <img src="<?= base_url() ?>assets/img/3.png" class="m-1" alt="No">
                                    Konfirmasi
                                    <img src="<?= base_url() ?>assets/img/Expand_right.png" alt="next">
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container w-100 bg-white rounded-3 h-auto">
        <div class="img-fluid mt-5 text-center pb-5 pt-5">
            <img src="<?= base_url() ?>assets/img/Relawan.png" alt="Foto_Content">
        </div>
        <form class="row g-3 w-auto mx-5">
            <div class="col-md-6">
                <label for="inputNamaKegiatan" class="form-label">Nama Kegiatan</label>
                <input type="Name" class="form-control" id="inputNama" placeholder="Teens Go Green Volunteers">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="alifsss@gmail.com">
            </div>
            <div class="col-md-6">
                <label for="inputNomor" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="inputNoTelp" placeholder="08125343586">
            </div>
            <div class="col-md-6">
                <label for="inputUmur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="inputUmur">
            </div>
            <div class="col-md-6">
                <label for="inputPekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="inputPekerjaan">
            </div>
            <div class="col-md-6">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat">
            </div>
            <div class="form-group">
                <label for="comment">Mengapa anda tertarik untuk aktivitas ini?</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="form-group">
                <label for="Pengalaman">Apa Pengalamanmu?</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="file">Upload CV anda Disini!</label>
                    <br>
                    <input type="file" id="file" name="file" multiple />
                </div>
            </form>

            <div class="mt-4" style="text-align: left; padding:10px;">
                <a href="#" class="btn Kirim">Kirim</a>
            </div>
        </form>
    </div>
    <div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>