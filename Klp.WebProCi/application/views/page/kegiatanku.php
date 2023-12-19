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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleKegiatanku.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="navProfil">
        <nav class="nav navProf nav-pills nav-fill container-expand " style="padding-top:99px;">
            <a class="nav-item nav-link navProfButt " href="<?= base_url() ?>index.php/Profile">
                <i class="fa-regular fa-circle-user" style="color: #00897b; margin-right:5px;"></i>Profil</a>
            <a class="nav-item nav-link navProfButt active" href="<?= base_url() ?>index.php/Kegiatanku" style="color: #00897b;">
                <i class="fa-regular fa-newspaper" style="color: #00897b; margin-right:5px;"></i>Kegiatanku</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Notifikasi">
                <i class="fa-regular fa-bell" style="color: #00897b; margin-right:5px;"></i>Notifikasi</a>
            <a class="nav-item nav-link navProfButt" href="<?= base_url() ?>index.php/Favorit">
                <i class="fa-regular fa-heart" style="color: #00897b; margin-right:5px;"></i>Favorit</a>
        </nav>
    </section>
    <section id="Kegiatanku" style="padding-top: 10px; padding-bottom:10px;">
        <div class="container-fluid ">
            <div class="row" style="padding:20px 122px;">
                <div class="col-md-12 ">
                    <h2 style="padding-left:10px;">Kegiatanku</h2>
                    <h3 style="padding-left:10px;">Kegiatan yang kamu ikuti akan terdaftar disini, silahkan cek status
                        kegiatanmu!</h3>
                    <table class="table">
                        <thead class="table-light" >
                            <tr >
                                <th class="isiHead" scope="col" style="border-radius: 10px 0px 0px 0px;">Kegiatan</th>
                                <th class="isiHead" scope="col">Verifikasi</th>
                                <th class="isiHead" scope="col">Aktif</th>
                                <th class="isiHead" scope="col" style="border-radius: 0px 10px 0px 0px;">Selesai</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>