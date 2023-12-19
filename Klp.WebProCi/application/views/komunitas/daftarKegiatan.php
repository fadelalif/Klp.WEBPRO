<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Komunitas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDaftarKegiatan.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">


</head>

<body>
    <div>
        <?php include 'application/views/navKomunitas.php'; ?>
    </div>
    <section id="daftarPage" style="padding-top: 100px;" position="relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="DaftarHead fw-semibold text-center ">Buat Kegiatan
                    </h1>
                    <form action="<?php echo site_url('Kegiatan/tambah'); ?>" method="post"
                        enctype="multipart/form-data" role="form">
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Detail Kegiatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control"
                                placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" aria-describedby="basic-addon1"
                                required />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="aktivitas_kegiatan" id="aktivitas_kegiatan" class="form-control"
                                placeholder="Aktivitas" aria-label="Aktivitas" aria-describedby="basic-addon1"
                                required />
                        </div>
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Data Kegiatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tanggal_kegiatan" class="input-group-text">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan"
                                aria-describedby="basic-addon1" required />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="batas_daftar" class="input-group-text">Batas Pendaftaran</label>
                            <input type="date" class="form-control" id="batas_daftar" name="batas_daftar"
                                aria-describedby="basic-addon1" required />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="lokasi_kegiatan" id="lokasi_kegiatan" class="form-control"
                                placeholder="Lokasi Kegiatan" aria-label="Lokasi Kegiatan"
                                aria-describedby="basic-addon1" required />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control"
                                placeholder="Penanggung Jawab" aria-label="Penanggung Jawab"
                                aria-describedby="basic-addon1" required />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="kategori">Kategori Komunitas</label>
                            <select class="form-select" id="kategori" name="kategori" aria-describedby="basic-addon1"
                                required>
                                <option value="">Pilih Kategori</option>
                                <option value="Perhutanan">Perhutanan</option>
                                <option value="Perairan">Perairan</option>
                                <option value="Bersih-Bersih">Lingkungan</option>
                                <option value="Daur Ulang">Daur Ulang</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                            <textarea class="form-control" name="deskripsi_kegiatan"
                                placeholder="Masukan Deskripsi Kegiatan Anda" id="desc" style="height: 100px"
                                required></textarea>
                            <label for="desc">Deskripsi</label>
                        </div>
                        <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                            <textarea class="form-control" name="ketentuan"
                                placeholder="Ketentuan Pendaftaran" id="desc" style="height: 100px"
                                required></textarea>
                            <label for="desc">Ketentuan Pendaftaran</label>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="provinsi">Provinsi</label>
                            <select class="form-select" id="provinsi" name="provinsi" aria-describedby="basic-addon1"
                                required>
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
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="file" name="fileUpload" size="20" required />
                        </div>

                        <div class="mt-4" style="text-align: center; padding-bottom:15px;">
                            <button type="submit" class="btn MasukBut">Tambahkan</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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