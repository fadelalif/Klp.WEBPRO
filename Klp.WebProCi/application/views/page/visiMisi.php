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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleVisiMisi.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="headDash" style="position: relative;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
                    <img src="<?= base_url() ?>assets/img/VisiMisiHead.jpg" alt=""
                        style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
                    <h1 class="headerDash">Visi & Misi</h1>
                    <p class="headerDescDash">Kami tentu memiliki visi dan misi sebagai landasan</p>
                </div>
            </div>
        </div>
    </section>

    <section id="descVisiMisi" style="position: relative;">
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col-md-6 headDash-tagline d-flex justify-content-center align-items-center">
                    <h1 class="msgVisiMisi">Visi</h1>
                </div>
                <div class="col-md-6 headDash-tagline d-flex justify-content-center align-items-center"
                    style="margin-bottom: 74px; margin-top:64px;">
                    <p class="msgDescVisiMisi" style="padding: 30px;">Menjadi terdepan sebagai kaum intelektual
                        Pemuda Pancasila dalam
                        meningkatkan kualitas sumber daya manusia dan mengimplementasikan nilai–nilai Pancasila dengan
                        semangat kebersamaan dan persaudaraan demi esensi dan eksistensi SAPMA Pemuda Pancasila di Kota
                        Surakarta pada khususnya dan Indonesia pada umumnya.
                    </p>
                </div>
            </div>
            <div class="row" style="background-color:#DADADA; padding-top:10px;">
                <div class="col-md-6 headDash-tagline d-flex justify-content-center align-items-center">
                    <p class="msgDescVisiMisi" style="padding: 30px;">1) Menggunakan segala kemampuan dan potensi
                        diri sebagai kaum intelektual
                        untuk memberikan yang terbaik bagi SAPMA Pemuda Pancasila, bangsa dan Negara
                        <br>2) Pemahaman mendalam dan implementasi nilai–nilai yang terkandung dalam Pancasila (sebagai
                        ideologi kehidupan berbangsa dan bernegara) untuk diri sendiri maupun orang lain dengan atau
                        melalui lembaga SAPMA Pemuda Pancasila.
                    </p>
                </div>
                <div class="col-md-6 headDash-tagline d-flex justify-content-center align-items-center"
                    style="margin-bottom: 74px; margin-top:64px;">
                    <h1 class="msgVisiMisi">Misi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 headDash-tagline text-center">
                    <h1 class="msgVisiMisi" style="padding:30px;">Nilai Kami</h1>
                </div>
                <div class="col-md-4 headDash-tagline text-center">
                    <p class="msgDescVisiMisi" style="padding:30px;">Kami mengutamakan kepercayaan dalam setiap
                        interaksi di platform kami.
                        Kami melindungi informasi pribadi relawan dan organisasi dengan keamanan yang kuat serta
                        mempromosikan transparansi dalam hubungan antara kedua belah pihak.
                    </p>
                </div>
                <div class="col-md-4 headDash-tagline text-center">
                    <p class="msgDescVisiMisi" style="padding:30px;">Kami percaya bahwa setiap aksi sukarela
                        memiliki potensi untuk
                        menciptakan dampak yang signifikan dalam masyarakat. Oleh karena itu, kami berkomitmen
                        untuk mempromosikan proyek-proyek yang bermanfaat dan memberikan kesempatan bagi para
                        relawan untuk berkontribusi dalam pengurangan emisi gas ini.
                    </p>
                </div>
                <div class="col-md-4 headDash-tagline text-center">
                    <p class="msgDescVisiMisi" style="padding:30px;">Kami mendorong partisipasi aktif dari semua
                        pengguna kami. Kami
                        menyediakan pengalaman yang menyenangkan dan bermakna bagi para relawan dan organisasi
                        untuk terlibat dalam kegiatan sukarela.
                    </p>
                </div>



            </div>
        </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>