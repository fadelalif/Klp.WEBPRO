<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Komunitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleRegister.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">


</head>
<body>
    <section id="daftarPage" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="DaftarHead fw-semibold text-center ">
                        Daftar
                    </h1>
                    <form action="<?php echo site_url('Kegiatan/tambah'); ?>" method="post">
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Detail Kegiatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" placeholder="Nama Keigatan" aria-label="Nama Keigatan"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="judul_kegiatan" id="judul_kegiatan" class="form-control" placeholder="judul" aria-label="judul"
                                aria-describedby="basic-addon1" />
                        </div>
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Data Keigatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tgl_kegiatan" class="input-group-text">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="lokasi_kegiatan" id="lokasi_kegiatan" class="form-control" placeholder="Lokasi Kegiatan"
                                aria-label="Lokasi Kegiatan" aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" aria-label="Penanggung Jawab"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="kategori">Kategori Komunitas</label>
                            <select class="form-select" id="kategori" name="kategori"
                                aria-describedby="basic-addon1">
                                <option value="">Pilih Kategori</option>
                                <option value="Perhutana">Perhutana</option>
                                <option value="Perairan">Perairan</option>
                                <option value="Bersih-Bersih">Bersih-Bersih</option>
                                <option value="Daur Ulang">Daur Ulang</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                        <textarea class="form-control" name="deskripsi_kegiatan"placeholder="Masukan Deskripsi Kegiatan Anda" id="desc" style="height: 100px"></textarea>
                        <label for="desc">Deskripsi</label>
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
                        <div class="mx-auto form-check" style=" width: 568px; font-size: 16px">
                        <input type="checkbox" class="form-check-input" id="aggrement" name="aggrement" value="agree">
                        <label class="form-check-label" for="aggrement"> Dengan ini komunitas kami dengan sungguh-sungguh membuat kegiatan sesuai dengan syarat dan kesepakatan yang berlaku</label><br>
                        </div>


                        <div class="mt-4" style="text-align: center; padding-bottom:15px;">
                        <button type="submit" class="btn MasukBut">MASUK</button>
                        </div>


                    </form>
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