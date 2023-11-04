<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Komunitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">

</head>
<body>
    <section id="tableKegiatan">
    <div class="container">
        <div class="row">
        <h1>Daftar Kegiatan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="sorting sorting_asc" aria-label="Name: activate to sort column descending">Nama Kegiatan</th>
                    <th class="sorting sorting_asc" aria-label="Name: activate to sort column descending">Judul Kegiatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                    <?php foreach ($kegiatan as $k): ?>
                    <tr>
                        <td><?php echo $k->nama_kegiatan; ?></td>
                        <td><?php echo $k->judul_kegiatan; ?></td>
                        <td>
                        <button class="btn btn-primary"onclick="location.href='<?php echo site_url('Kegiatan/edit/' . $k->nama_kegiatan); ?>'">Edit</button>
                        <button class="btn btn-danger" onclick="if (confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')) { location.href='<?php echo site_url('Kegiatan/hapus/' . $k->nama_kegiatan); ?>'; }">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </tbody>
        </table>
        </div>
    </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const provinsiSelect = document.getElementById("provinsi");
            const kabupatenSelect = document.getElementById("kabupaten");

            if (provinsiSelect) {
                provinsiSelect.addEventListener("change", function () {
                    const selectedProvinsi = provinsiSelect.value;

                    // Hanya tampilkan input kabupaten/kota jika provinsi dipilih
                    if (selectedProvinsi) {
                        kabupatenSelect.style.display = "block";
                    } else {
                        kabupatenSelect.style.display = "none";
                    }
                });
            }
        });
    </script>
</body>

</html>