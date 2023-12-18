<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleRegister.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">


</head>

<body>
<div>
        <?php include 'application/views/nav.php'; ?>
    </div>
    <section id="loginPage" style="padding-top: 130px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="DaftarHead fw-semibold text-center ">
                        Daftar
                    </h1>
                    <form action="<?php echo site_url('Register/tambah'); ?>" method="post" enctype="multipart/form-data" role="form">
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Akun
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="firstname" placeholder="Nama Depan" aria-label="Nama Depan"
                                aria-describedby="basic-addon1" />
                            <input type="text" class="form-control" name="lastname" placeholder="Nama Belakang"
                                aria-label="Nama Belakang" aria-describedby="basic-addon2" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="password" class="form-control" name="password" placeholder="Kata Sandi" aria-label="Kata Sandi"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="password" class="form-control" name="konf_password" placeholder="Konfirmasi Kata Sandi"
                                aria-label="Konfirmasi Kata Sandi" aria-describedby="basic-addon1" />
                        </div>
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Data Diri
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="nmrTelphone" placeholder="Nomor Telepon"
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
                            <input type="text" class="form-control" name= "pekerjaan" placeholder="Pekerjaan" aria-label="Pekerjaan"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="institusi" placeholder="Institusi" aria-label="Institusi"
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
                        <p class="text-center mx-auto" style="text-align: center; width: 568px; font-size: 16px">
                            Pastikan bahwa informasi yang anda masukkan sudah benar. Dengan mendaftar, Anda telah
                            menyetujui syarat dan ketentuan dari Relawanin </p>

                            <div class="mt-4" style="text-align: center; padding-bottom:15px;">
                            <button type="submit" class="btn MasukBut">Submit</button>
                            </div>


                    </form>
                    <p class="text-center mt-3" style="font-size: 16px">
                        Daftar dengan
                    </p>
                    <div class="social_icons text-center">
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Google__G__Logo 1.png" width="30" height="30" />
                        </a>
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Microsoft_logo 1.png" width="30" height="30" />
                        </a>
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Facebook_f_logo_(2019) 1.png" width="30"
                                height="30" />
                        </a>
                    </div>
                    <p class="text-center mt-3" style="font-size: 16px">
                        Sudah punya akun?
                        <a href="#" style="color: #00897b; margin-left: 10px">Masuk</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        const provinsiSelect = document.getElementById("provinsi");
        const kabupatenSelect = document.getElementById("kabupaten");

        provinsiSelect.addEventListener("change", function () {
            const selectedProvinsi = provinsiSelect.value;

            // Hanya tampilkan input kabupaten/kota jika provinsi dipilih
            if (selectedProvinsi) {
                kabupatenSelect.style.display = "block";
            } else {
                kabupatenSelect.style.display = "none";
            }
        });
    </script>
</body>

</html>