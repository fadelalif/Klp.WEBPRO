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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleTentangKami.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="headDash" style="position: relative;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
                    <img src="<?= base_url() ?>assets/img/AboutHead.jpg" alt=""
                        style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
                    <h1 class="headerDash">Tentang Kami</h1>
                    <p class="headerDescDash">Ketahui lebih mendalam tentang Relawanin</p>
                </div>
            </div>
        </div>
    </section>

    <section id="descTentang" style="position: relative;">
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col-md-12 headDash-tagline text-center"
                    style="margin-bottom: 74px; margin-top:64px; padding: 0;">
                    <h1 class="msgTentang">Halo! Kami dari Relawanin</h1>
                    <p class="msgDescTentang">Aplikasi Relawanin merupakan platform inovatif yang menghubungkan
                        masyarakat<br>
                        yang ingin berkontribusi dalam kegiatan pengurangan emisi gas pada lingkup mahasiswa dengan
                        organisasi. <br>Tujuan kami adalah memudahkan kolaborasi antara para relawan dan organisasi yang
                        mengadakan, <br>sehingga menciptakan dampak positif yang lebih bagi masyarakat.
                    </p>
                    <h1 class="msgTentang" style="padding-top:20px;">Dengan Relawanin</h1>
                    <p class="msgDescTentang">Aplikasi Relawanin menyediakan akses mudah
                        dan cepat kepada sukarelawan. <br>Para pengguna dapat melihat aktivitas yang tersedia, <br>
                        melihat
                        deskripsi, lokasi, dan persyaratan yang diperlukan sehingga memudahkan mereka <br>untuk
                        menemukan proyek
                        yang sesuai dengan minat dan keahlian mereka.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>