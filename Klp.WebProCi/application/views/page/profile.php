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

                    <form method="post" action="<?= base_url('Profile/updateProfile') ?>">
                        <div class="photoProf text-center">
                            <img src="<?= base_url() ?>assets/img/profile picture.png" alt="" style="width: 238px;" />
                        </div>
                        <div style="text-align: center; margin-bottom: 37px;">
                            <a class="ubahProfLink" href="#">Ubah Foto</a>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="firstname" placeholder="Nama Depan"
                                aria-label="Nama Depan" aria-describedby="basic-addon1"
                                value="<?php echo $user_profile->firstname; ?>" />
                            <input type="text" class="form-control" name="lastname" placeholder="Nama Belakang"
                                aria-label="Nama Belakang" aria-describedby="basic-addon2"
                                value="<?php echo $user_profile->lastname; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email"
                                aria-describedby="basic-addon1" value="<?php echo $user_profile->email; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="nmrTelphone" placeholder="Nomor Telepon"
                                aria-label="Nomor Telepon" aria-describedby="basic-addon1"
                                value="<?php echo $user_profile->nmrTelphone; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tgl_lahir" class="input-group-text">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                aria-describedby="basic-addon1" value="<?php echo $user_profile->tgl_lahir; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                aria-describedby="basic-addon1">
                                <option value="" <?php echo ($user_profile->jenis_kelamin === 'Pilih jenis kelamin') ? 'selected' : ''; ?>>Pilih jenis kelamin</option>
                                <option value="Laki-laki" <?php echo ($user_profile->jenis_kelamin === 'Laki-Laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                <option value="Perempuan" <?php echo ($user_profile->jenis_kelamin === 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan"
                                aria-label="Pekerjaan" aria-describedby="basic-addon1"
                                value="<?php echo $user_profile->pekerjaan; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" class="form-control" name="institusi" placeholder="Institusi"
                                aria-label="Institusi" aria-describedby="basic-addon1"
                                value="<?php echo $user_profile->institusi; ?>" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="provinsi">Provinsi</label>
                            <select class="form-select" id="provinsi" name="provinsi" aria-describedby="basic-addon1">
                                <option value="" <?php echo ($kegiatan->provinsi === 'Pilih provinsi') ? 'selected' : ''; ?>>Pilih provinsi</option>
                                <option value="Aceh" <?php echo ($kegiatan->provinsi === 'Aceh') ? 'selected' : ''; ?>>
                                    Aceh</option>
                                <option value="Sumatera Utara" <?php echo ($kegiatan->provinsi === 'Sumatera Utara') ? 'selected' : ''; ?>>Sumatera Utara</option>
                                <option value="Sumatera Barat" <?php echo ($kegiatan->provinsi === 'Sumatera Barat') ? 'selected' : ''; ?>>Sumatera Barat</option>
                                <option value="Riau" <?php echo ($kegiatan->provinsi === 'Riau') ? 'selected' : ''; ?>>
                                    Riau</option>
                                <option value="Jambi" <?php echo ($kegiatan->provinsi === 'Jambi') ? 'selected' : ''; ?>>
                                    Jambi</option>
                                <option value="Sumatera Selatan" <?php echo ($kegiatan->provinsi === 'Sumatera Selatan') ? 'selected' : ''; ?>>Sumatera Selatan</option>
                                <option value="Bengkulu" <?php echo ($kegiatan->provinsi === 'Bengkulu') ? 'selected' : ''; ?>>Bengkulu</option>
                                <option value="Lampung" <?php echo ($kegiatan->provinsi === 'Lampung') ? 'selected' : ''; ?>>Lampung</option>
                                <option value="Kepulauan Bangka Belitung" <?php echo ($kegiatan->provinsi === 'Kepulauan Bangka Belitung') ? 'selected' : ''; ?>>Kepulauan Bangka Belitung</option>
                                <option value="Kepulauan Riau" <?php echo ($kegiatan->provinsi === 'Kepulauan Riau') ? 'selected' : ''; ?>>Kepulauan Riau</option>
                                <option value="DKI Jakarta" <?php echo ($kegiatan->provinsi === 'DKI Jakarta') ? 'selected' : ''; ?>>DKI Jakarta</option>
                                <option value="Jawa Barat" <?php echo ($kegiatan->provinsi === 'Jawa Barat') ? 'selected' : ''; ?>>Jawa Barat</option>
                                <option value="Jawa Tengah" <?php echo ($kegiatan->provinsi === 'Jawa Tengah') ? 'selected' : ''; ?>>Jawa Tengah</option>
                                <option value="Jawa Timur" <?php echo ($kegiatan->provinsi === 'Jawa Timur') ? 'selected' : ''; ?>>Jawa Timur</option>
                                <option value="DI Yogyakarta" <?php echo ($kegiatan->provinsi === 'DI Yogyakarta') ? 'selected' : ''; ?>>DI Yogyakarta</option>
                                <option value="Banten" <?php echo ($kegiatan->provinsi === 'Banten') ? 'selected' : ''; ?>>Banten</option>
                                <option value="Bali" <?php echo ($kegiatan->provinsi === 'Bali') ? 'selected' : ''; ?>>
                                    Bali</option>
                                <option value="Nusa Tenggara Barat" <?php echo ($kegiatan->provinsi === 'Nusa Tenggara Barat') ? 'selected' : ''; ?>>Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur" <?php echo ($kegiatan->provinsi === 'Nusa Tenggara Timur') ? 'selected' : ''; ?>>Nusa Tenggara Timur</option>
                                <option value="Kalimantan Barat" <?php echo ($kegiatan->provinsi === 'Kalimantan Barat') ? 'selected' : ''; ?>>Kalimantan Barat</option>
                                <option value="Kalimantan Tengah" <?php echo ($kegiatan->provinsi === 'Kalimantan Tengah') ? 'selected' : ''; ?>>Kalimantan Tengah</option>
                                <option value="Kalimantan Selatan" <?php echo ($kegiatan->provinsi === 'Kalimantan Selatan') ? 'selected' : ''; ?>>Kalimantan Selatan</option>
                                <option value="Kalimantan Timur" <?php echo ($kegiatan->provinsi === 'Kalimantan Timur') ? 'selected' : ''; ?>>Kalimantan Timur</option>
                                <option value="Kalimantan Utara" <?php echo ($kegiatan->provinsi === 'Kalimanta Utara') ? 'selected' : ''; ?>>Kalimantan Utara</option>
                                <option value="Sulawesi Utara" <?php echo ($kegiatan->provinsi === 'Sulawesi Utara') ? 'selected' : ''; ?>>Sulawesi Utara</option>
                                <option value="Sulawesi Tengah" <?php echo ($kegiatan->provinsi === 'Sulawesi Tengah') ? 'selected' : ''; ?>>Sulawesi Tengah</option>
                                <option value="Sulawesi Selatan" <?php echo ($kegiatan->provinsi === 'Sulawesi Selatan') ? 'selected' : ''; ?>>Sulawesi Selatan</option>
                                <option value="Sulawesi Tenggara" <?php echo ($kegiatan->provinsi === 'Sulawesi Selatan') ? 'selected' : ''; ?>>Sulawesi Tenggara</option>
                                <option value="Gorontalo" <?php echo ($kegiatan->provinsi === 'Gorontalo') ? 'selected' : ''; ?>>Gorontalo</option>
                                <option value="Sulawesi Barat" <?php echo ($kegiatan->provinsi === 'Sulawesi Barat') ? 'selected' : ''; ?>>Sulawesi Barat</option>
                                <option value="Maluku" <?php echo ($kegiatan->provinsi === 'Maluku') ? 'selected' : ''; ?>>Maluku</option>
                                <option value="Maluku Utara" <?php echo ($kegiatan->provinsi === 'Maluku Utara') ? 'selected' : ''; ?>>Maluku Utara</option>
                                <option value="Papua" <?php echo ($kegiatan->provinsi === 'Papua') ? 'selected' : ''; ?>>
                                    Papua</option>
                                <option value="Papua Barat" <?php echo ($kegiatan->provinsi === 'Papua Barat') ? 'selected' : ''; ?>>Papua Barat</option>
                            </select>
                        </div>
                        <select class="form-select input-group mb-4 mx-auto " style="max-width: 568px" id="kabupaten"
                            name="kabupaten" style="display: none;">
                            <option value="">Pilih kabupaten/kota</option>
                        </select>
                        <div class="form-floating mx-auto" style="max-width: 568px; ">
                            <input type="text" class="form-control" id="floatingInput" name="deksripsi akun"
                                placeholder=" ">
                            <label for="floatingInput">Deskripsi Akun</label>
                        </div>
                        <div style="text-align: center; margin: 37px 37px; ">
                            <a class="ubahPassLink" href="#">Ubah Kata Sandi</a>
                        </div>
                        <div class="mt-4" style="text-align: center">
                            <button type="submit" class="DaftarBut">Simpan</button>
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