<!DOCTYPE html>
<html lang="en">

<head>
    <title>Relawanin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleProfile.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="navProfil">
        <nav class="nav navProf nav-pills nav-fill container-expand" style="padding-top:99px;">
            <a class="nav-item nav-link navProfButt active" href="#">
                <i class="fa-regular fa-circle-user" style="color: #00897b; margin-right:5px;"></i>Profil</a>
            <a class="nav-item nav-link navProfButt" href="#">
                <i class="fa-regular fa-newspaper" style="color: #00897b; margin-right:5px;"></i>Kegiatan</a>
            <a class="nav-item nav-link navProfButt" href="#">
                <i class="fa-regular fa-bell" style="color: #00897b; margin-right:5px;"></i>Notifikasi</a>
            <a class="nav-item nav-link navProfButt" href="#">
                <i class="fa-regular fa-heart" style="color: #00897b; margin-right:5px;"></i>Favorit</a>
        </nav>
    </section>

    <?php include 'application/views/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>