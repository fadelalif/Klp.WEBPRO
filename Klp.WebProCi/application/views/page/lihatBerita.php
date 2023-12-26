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

    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        article {
            margin-bottom: 30px;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        
    </style>
</head>
<body>
	<div>
		<?php include 'application/views/navLogin.php'; ?>
	</div>

    <header>
        
    </header>

    <main>
    <article>
        <?php if (!empty($berita)) : ?>
            <img src="<?= base_url() ?>assets/img/<?= $berita['gambar_berita'] ?>" style="max-width: 100%;" alt="<?= $berita['nama_berita'] ?>">
            <h1><?= $berita['nama_berita'] ?></h1>
            <p><?= $berita['isi_berita'] ?></p>
        <?php else : ?>
            <p>Artikel tidak ditemukan.</p>
        <?php endif; ?>

        <div style="padding: 5px; background-color:green; padding-right: 10px; width: 190px">
            <a href="<?= base_url() ?>index.php/cariBerita" class="back-btn">Kembali ke Daftar Artikel</a>
        </div>
    </article>

		
    </main>
	

    <?php include 'application/views/footer.php'; ?>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		AOS.init();
	</script>

</body>
</html>
