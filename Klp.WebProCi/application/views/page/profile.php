<!DOCTYPE html>
<html lang="en">

<head>
    <title>Relawanin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleProfile.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="navProfil">
        <nav class="nav navProf nav-pills nav-fill container-expand " style="padding-top:99px;">
            <a class="nav-item nav-link navProfButt active" href="<?= base_url() ?>index.php/Profile">
                <i class="fa-regular fa-circle-user" style="color: #00897b; margin-right:5px;"></i>Profil</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Kegiatanku">
                <i class="fa-regular fa-newspaper" style="color: #00897b; margin-right:5px;"></i>Kegiatanku</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Notifikasi">
                <i class="fa-regular fa-bell" style="color: #00897b; margin-right:5px;"></i>Notifikasi</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Favorit">
                <i class="fa-regular fa-heart" style="color: #00897b; margin-right:5px;"></i>Favorit</a>
        </nav>
    </section>
    <section id="editProf" style="padding-top: 10px; padding-bottom:10px;">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-md-12 ">
                    <form>
                        <div class="photoProf text-center">
                            <img src="<?= base_url() ?>assets/img/profile picture.png" alt="" style="width: 238px;" />
                        </div>
                        <div style="text-align: center; margin-bottom: 37px;">
                            <a class="ubahProfLink" href="#">Ubah Foto</a>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" placeholder="Nama Depan" aria-label="Nama Depan"
                                aria-describedby="basic-addon1" />
                            <input type="text" class="form-control" placeholder="Nama Belakang"
                                aria-label="Nama Belakang" aria-describedby="basic-addon2" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" placeholder="Nomor Telepon"
                                aria-label="Nomor Telepon" aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tgl_lahir" class="input-group-text">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                aria-describedby="basic-addon1">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" placeholder="Pekerjaan" aria-label="Pekerjaan"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" placeholder="Institusi" aria-label="Institusi"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="provinsi">Provinsi</label>
                            <select class="form-select" id="provinsi" name="provinsi" aria-describedby="basic-addon1">
                                <option value="">Pilih provinsi</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Riau">Riau</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                <option value="Banten">Banten</option>
                                <option value="Bali">Bali</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Papua">Papua</option>
                                <option value="Papua Barat">Papua Barat</option>
                            </select>
                        </div>
                        <select class="form-select input-group mb-4 mx-auto " style="max-width: 568px" id="kabupaten"
                            name="kabupaten" style="display: none;">
                            <option value="">Pilih kabupaten/kota</option>
                        </select>
                        <div class="form-floating mx-auto" style="max-width: 568px; ">
                            <input type="text" class="form-control" id="floatingInput" placeholder=" ">
                            <label for="floatingInput">Deskripsi Akun</label>
                        </div>
                        <div style="text-align: center; margin: 37px 37px; ">
                            <a class="ubahPassLink" href="#">Ubah Kata Sandi</a>
                        </div>
                        <div class="mt-4" style="text-align: center">
                            <a href="#" class="btn DaftarBut">Simpan</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>