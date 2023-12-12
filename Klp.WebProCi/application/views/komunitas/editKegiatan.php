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
                    
                    <form action="<?php echo site_url('Kegiatan/update/' . $kegiatan->id); ?>" method="post" enctype="multipart/form-data" role="form">
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Detail Kegiatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" placeholder="Nama Keigatan" aria-label="Nama Keigatan"
                                aria-describedby="basic-addon1" value="<?php echo $kegiatan->nama_kegiatan; ?>" required/>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="aktivitas_kegiatan" id="aktivitas_kegiatan" class="form-control" placeholder="aktivitas" aria-label="aktivitas"
                                aria-describedby="basic-addon1" value="<?php echo $kegiatan->aktivitas_kegiatan; ?>" required/>
                        </div>
                        <h2 class="AkunHead fw-semibold " style="margin-left: 465px;">
                            Data Keigatan
                        </h2>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tanggal_kegiatan" class="input-group-text">Tanggal Kegiatan</label>
                            <?php $tanggal_kegiatan_value = !empty($kegiatan->tanggal_kegiatan) ? date('Y-m-d', strtotime($kegiatan->tanggal_kegiatan)) : ''; ?>
                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan"
                                aria-describedby="basic-addon1" value="<?php echo $tanggal_kegiatan_value; ?>" autocomplete="off" required/>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="lokasi_kegiatan" id="lokasi_kegiatan" class="form-control" placeholder="Lokasi Kegiatan"
                                aria-label="Lokasi Kegiatan" aria-describedby="basic-addon1" value="<?php echo $kegiatan->lokasi_kegiatan; ?>" required/>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" aria-label="Penanggung Jawab"
                                aria-describedby="basic-addon1" value="<?php echo $kegiatan->penanggung_jawab; ?>" required/>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="kategori">Kategori Komunitas</label>
                            <select class="form-select" id="kategori" name="kategori"
                                aria-describedby="basic-addon1" required>
                                <option value="" <?php echo ($kegiatan->kategori === 'Pilih Kategori') ? 'selected' : ''; ?>>Pilih Kategori</option>
                                <option value="Perhutanan" <?php echo ($kegiatan->kategori === 'Perhutana') ? 'selected' : ''; ?>>Perhutanan</option>
                                <option value="Perairan" <?php echo ($kegiatan->kategori === 'Perairan') ? 'selected' : ''; ?>>Perairan</option>
                                <option value="Bersih-Bersih" <?php echo ($kegiatan->kategori === 'Bersih-Bersih') ? 'selected' : ''; ?>>Bersih-Bersih</option>
                                <option value="Daur Ulang" <?php echo ($kegiatan->kategori === 'Daur Ulang') ? 'selected' : ''; ?>>Daur Ulang</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                        <textarea class="form-control" name="deskripsi_kegiatan"placeholder="Masukan Deskripsi Kegiatan Anda" id="desc" style="height: 100px" required><?php echo $kegiatan->deskripsi_kegiatan; ?></textarea>
                        <label for="desc">Deskripsi</label>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label class="input-group-text" for="provinsi">Provinsi</label>
                            <select class="form-select" id="provinsi" name="provinsi" aria-describedby="basic-addon1">
                                <option value="" <?php echo ($kegiatan->provinsi === 'Pilih provinsi') ? 'selected' : ''; ?>>Pilih provinsi</option>
                                <option value="Aceh" <?php echo ($kegiatan->provinsi === 'Aceh') ? 'selected' : ''; ?>>Aceh</option>
                                <option value="Sumatera Utara" <?php echo ($kegiatan->provinsi === 'Sumatera Utara') ? 'selected' : ''; ?>>Sumatera Utara</option>
                                <option value="Sumatera Barat" <?php echo ($kegiatan->provinsi === 'Sumatera Barat') ? 'selected' : ''; ?>>Sumatera Barat</option>
                                <option value="Riau" <?php echo ($kegiatan->provinsi === 'Riau') ? 'selected' : ''; ?>>Riau</option>
                                <option value="Jambi" <?php echo ($kegiatan->provinsi === 'Jambi') ? 'selected' : ''; ?>>Jambi</option>
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
                                <option value="Bali" <?php echo ($kegiatan->provinsi === 'Bali') ? 'selected' : ''; ?>>Bali</option>
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
                                <option value="Papua" <?php echo ($kegiatan->provinsi === 'Papua') ? 'selected' : ''; ?>>Papua</option>
                                <option value="Papua Barat" <?php echo ($kegiatan->provinsi === 'Papua Barat') ? 'selected' : ''; ?>>Papua Barat</option>
                            </select>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <?php if (!empty($kegiatan->uploadFile)) : ?>
                                <p>Current File: <?php echo $kegiatan->uploadFile; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="file" name="fileUpload" size="20"/>
                        </div>


                        <div class="mt-4" style="text-align: center; padding-bottom:15px;">
                        <button type="submit" class="btn MasukBut">Submit</button>
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
    <script>
    document.getElementById('tanggal_kegiatan').addEventListener('change', function() {
        location.reload(true);
    });
    </script>

</body>

</html>