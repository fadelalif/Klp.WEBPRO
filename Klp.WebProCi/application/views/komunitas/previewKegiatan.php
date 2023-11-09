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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">

</head>
<body>
    <div>
    <?php include 'application/views/navKomunitas.php'; ?>
    </div>
    <section id="tableKegiatan" style="position:relative;">
    <div class="container" style="padding-top:100px;">
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
            <!-- <tbody>
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
                </tbody> -->
            </tbody>
        </table>
        </div>
    </div>
    </section>
    <?php include 'application/views/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>