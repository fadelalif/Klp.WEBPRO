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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleFavorit.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="navProfil">
        <nav class="nav navProf nav-pills nav-fill container-expand " style="padding-top:99px;">
            <a class="nav-item nav-link navProfButt " href="<?= base_url() ?>index.php/Profile">
                <i class="fa-regular fa-circle-user" style="color: #00897b; margin-right:5px;"></i>Profil</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Kegiatanku">
                <i class="fa-regular fa-newspaper" style="color: #00897b; margin-right:5px;"></i>Kegiatanku</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Notifikasi">
                <i class="fa-regular fa-bell" style="color: #00897b; margin-right:5px;"></i>Notifikasi</a>
            <a class="nav-item nav-link navProfButt active" href="<?= base_url() ?>index.php/Favorit">
                <i class="fa-regular fa-heart" style="color: #00897b; margin-right:5px;"></i>Favorit</a>
        </nav>
    </section>
    <section id="Favorit" style="padding-top: 10px; padding-bottom:10px;">
        <div class="container-fluid ">
            <div class="row" style="padding:20px 122px;">
                <div class="col-md-12 ">
                    <h2 style="padding-left:10px;">Favorit</h2>
                    <h3 style="padding-left:10px;">Simpan list kegiatan yang kamu sukai dengan menambahkan ke favorit!
                    </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 0px 122px 0px 122px;">
                <a href="<?= base_url() ?>index.php/detailKegiatan" style="text-decoration: none;">
                    <div class="card cardKeg">
                        <img class="card-img-top" src="<?= base_url() ?>assets/img/cardKeg 1.png" alt="Card image cap">
                        <div class="card-body cB">
                            <h5 class="card-title cH"
                                style="color: #000;font-family: Arial;font-size: 20px;font-style: normal;font-weight: 700;line-height: normal;">
                                Karawang Peduli</h5>
                            <p class=" card-text cT1">Oleh Karawang Peduli</p>
                            <p class="card-text cT2"><img src=" <?= base_url() ?>assets/img/calendar.png" alt=""
                                    style="margin-right:8px;" />Sabtu, 14 September 2020</p>
                            <p class="card-text cT3"><img src=" <?= base_url() ?>assets/img/location.png" alt=""
                                    style="margin-right:8px;" />Karawang</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>