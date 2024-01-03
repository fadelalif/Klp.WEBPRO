<div class="container" style="margin-top:80px; text-align:center;">
    <form action="<?php echo site_url('DaftarBerita/update/'.$data->id); ?>" method="post" enctype="multipart/form-data" role="form">
        <?php if (isset($data) && !empty($data)): ?>
            <h2 class="AkunHead fw-semibold " style="">Akun</h2>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="nama_berita"placeholder="Judul Berita" aria-label="Judul Berita"aria-describedby="basic-addon1" value="<?= $data->nama_berita; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="tanggal_berita"placeholder="Tanggal Berita" aria-label="Tanggal Berita" aria-describedby="basic-addon1" value="<?= $data->tanggal_berita; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                <textarea class="form-control" name="isi_berita" placeholder="Leave a comment here" style="height: 100px"><?= $data->isi_berita; ?></textarea>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="file" name="gambar_berita" size="20" />
                <?php if ($data->gambar_berita): ?>
                    <p>File terkini: <?= $data->gambar_berita; ?></p>
                <?php endif; ?>
            </div>

            <?php else: ?>
                <p>Pengguna tidak ditemukan.</p>
            <?php endif; ?>
            <div class="mt-4" style="text-align: center; padding-bottom:100px;">
                <button class="button" type="submit">SUBMIT</button>
            </div>
    </form>
</div>