<div class="container" style="margin-top:80px; text-align:center;">
    <form action="<?php echo site_url('DaftarBerita/tambahberita/'); ?>" method="post" enctype="multipart/form-data" role="form">
            <h2 class="AkunHead fw-semibold " style="">Tambah Berita</h2>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="nama_berita"placeholder="nama_berita" aria-label="Nama Berita" aria-describedby="basic-addon1"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="date" class="form-control" name="tanggal_berita"placeholder="Tanggal Berita" aria-label="Tanggal Berita" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                <textarea class="form-control" name="isi_berita" placeholder="Leave a comment here" style="height: 100px"></textarea>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="file" name="gambar_berita" size="20" />
            </div>
            <div class="mt-4" style="text-align: center; padding-bottom:100px;">
                <button class="button" type="submit">SUBMIT</button>
            </div>
    </form>
</div>