<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCariBerita.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <div>
    </div>

    <!-- Header gambar -->
    <div class=" header-background container-fluid text-center overlay" data-aos="fade-up">
        <h1 class="mb-5 fw-lighter text-center" style="color: white; font-size: 100px;"> Relawanin Blog</h1>
        <p style="color: white; font-size: 25px;">Cerita dan Artikel</p>
    </div>

    <!-- konten -->
    <div class="header2 container-md" style="padding-top: 150px;">
        <h1 class="text-center fw-semibold" data-aos="fade-up">Semua Cerita dan Artikel</h1>
        <h5 class="text-center p-3 fw-lighter" data-aos="fade-up">Relawanin juga membagikan cerita dan artikel yang
            dapat kamu baca</h5>

        <!-- dropdown -->
        <div class="dropdown" style="text-align: right; padding-right: 10px; padding-top: 50px;" data-aos="fade-in">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="background-color: #00897B;">
                <i class="fas fa-filter" style="padding-right: 10px;"></i>
                Urutkan
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="dropdown" style="text-align:right; position: relative; top: -38px; right: 150px;"
            data-aos="fade-in">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="background-color: #00897B;">
                <i class="fas fa-filter" style="padding-right: 25px;"></i>
                Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>

        <div class="container text-center" data-aos="zoom-in">
            <div class="row g-2">
                <div class="col-6">
                    <div class="card mb-3 btn">
                        <img src="<?= base_url() ?>assets/img/berita2.jpg" class="card-img-top" width="200px">
                        <div class="card-body">
                            <h5 class="card-title">Peduli Karawang</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 btn">
                        <img src="<?= base_url() ?>assets/img/berita2.jpg" class="card-img-top" width="200px">
                        <div class="card-body">
                            <h5 class="card-title">Peduli Karawang</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 btn">
                        <img src="<?= base_url() ?>assets/img/berita2.jpg" class="card-img-top" width="200px">
                        <div class="card-body">
                            <h5 class="card-title">Peduli Karawang</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3 btn">
                        <img src="<?= base_url() ?>assets/img/berita2.jpg" class="card-img-top" width="200px">
                        <div class="card-body">
                            <h5 class="card-title">Peduli Karawang</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer id="footer" class="text-center text-lg-start">
        <section class="container-fluid p-1 text-end" id="contact-us">
            <div class="container-fluid text-center text-md-start mt-3  ">
                <div class="row md-3 justify-content-end">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                        <a>
                            <img src="<?= base_url() ?>assets/img/icon logo 1.png" alt=""
                                style="width: 241px; margin-left:56px;" />
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #00897B;">Layanan Kami</h6>
                        <p class="footer-links">
                            <a class="a-footer" href="#" style="text-decoration: none;">Daftarkan Komunitas</a><br>
                            <a class="a-footer" href="#" style="text-decoration: none;">Tentang Kami</a><br>
                            <a class="a-footer" href="#" style="text-decoration: none;">Pusat Bantuan</a><br>
                            <a class="a-footer" href="#" style="text-decoration: none;">Kerjasama</a><br>
                            <a class="a-footer" href="#" style="text-decoration: none;">Donasi</a><br>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 ms-auto" style="text-align:left;">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #fff;"> Informasi Kontak</h6>
                        <p style="color:#fff"><i class="fa-brands fa-instagram me-3" style="color: #fff;"></i> Relawanin
                        </p>
                        <p style="color:#fff"><i class="fas fa-home me-3" style="color: #fff;"></i> Jalan telekomunikasi
                        </p>
                        <p style="color:#fff">
                            <i class="fas fa-envelope me-3 " style="color: #fff;"></i> relawain@gmail.com
                        </p>
                        <p style="color:#fff">
                            <i class="fas fa-phone me-3 " style="color: #fff;"></i> +62 812-3989-290
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-3 text-white" style="background-color: #00897B;">
            © 2023 Copyright Relawanin
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<!-- <table class="table table-borderless text-center">
    <tbody>
        <tr>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
            <td class="align-middle">
                <div class="card p-3 mx-auto" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table> -->