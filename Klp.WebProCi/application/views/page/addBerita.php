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
                    <h1 class="DaftarHead fw-semibold text-center ">Tambah Berita
                    </h1>
                    <form action="<?php echo site_url('controller/addBerita'); ?>" method="post"
                        enctype="multipart/form-data" role="form">
                    
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <input type="text" name="judul_berita" id="judul_berita" class="form-control"
                                placeholder="Judul Berita" aria-label="Judul Berita" aria-describedby="basic-addon1"
                                required />
                        </div>
                
                    
                        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                            <label for="tanggal_berita" class="input-group-text">Tanggal Berita</label>
                            <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita"
                                aria-describedby="basic-addon1" required />
                        </div>
            
            
                        <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                            <textarea class="form-control" name="isi_berita"
                                placeholder="Masukan Deskripsi berita anda" id="desc" style="height: 100px"
                                required></textarea>
                            <label for="desc">isi Berita</label>
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
    
</body>

</html>