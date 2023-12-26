<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cari Berita</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCariBerita.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
	<div>
		<?php include 'application/views/navLogin.php'; ?>
	</div>

	<!-- Header gambar -->
	<section id="headDash" style="position: relative;">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
					<img src="<?= base_url() ?>assets/img/BeritaHead.jpg" alt="" style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" data-aos="zoom-in" />
					<h1 class="headerDash">Relawanin Blog</h1>
				</div>
			</div>
		</div>
	</section>


	<!-- konten -->
	<div class="header2 container-md" style="padding-top: 80px;">
		<h1 class="text-center fw-semibold" data-aos="fade-up">Semua Cerita dan Artikel</h1>
		<h5 class="text-center p-3 fw-lighter" data-aos="fade-up">Relawanin juga membagikan cerita dan artikel yang
			dapat kamu baca</h5>



		<section id="headDash" style="position: relative;" data-aos="zoom-in">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding:5px 15px 0px 0px;">
                                            
                        <button class="btn" onclick="sortNews('asc')">Terbaru</button>
                        <button class="btn" onclick="sortNews('desc')">Terlama</button>

                        <script>
                            function sortNews(order) {
                                window.location.href = '<?= base_url() ?>index.php/CariBerita/index/' + order;
                            }
                        </script>

                    </div>
				</div>
			</div>
	</div>
	</section>
	<!-- dropdown -->


	<div class="container text-center" data-aos="zoom-in">
		<div class="row g-2">
			<?php foreach ($berita as $item) : ?>
				<div class="col-6">
					<a href="<?= base_url() ?>index.php/lihatBerita?id=<?= $item['id'] ?>" class="card mb-3 btn">
						<img src="<?= base_url() ?>uploads/avatarBerita/<?= $item['gambar_berita'] ?>" class="card-img-top" width="200px">
						<div class="card-body">
							<h5 class="card-title"><?= $item['nama_berita'] ?></h5>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	</div>

	<!-- footer -->
	<?php include 'application/views/footer.php'; ?>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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