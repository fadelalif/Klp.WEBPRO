<!-- View: application/views/viewUser.php -->

<div class="container mt-5" style="padding-bottom:50px;">
    <center>
        <h1 style="padding-top:50px;">Data dari Database</h1>
        <?php if (isset($data) && !empty($data)): ?>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:30px">Nama Komunitas</span>
                <input type="text" class="form-control" value="<?= $data->nama_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:33px">Email Komunitas</span>
                <input type="text" class="form-control" value="<?= $data->email_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:85px">Telphone</span>
                <input type="text" class="form-control" value="<?= $data->nomorTlp_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" >Penanggung Jawab</span>
                <input type="text" class="form-control" value="<?= $data->penanggung_jawab; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:90px">Kategori</span>
                <input type="text" class="form-control" value="<?= $data->kategori_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:87px">Deskripsi</span>
                <input type="text" class="form-control" value="<?= $data->deskripsi_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:97px">Provinsi</span>
                <input type="text" class="form-control" value="<?= $data->provinsi_komunitas; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:65px">Upload Foto</span>
                <input type="text" class="form-control" value="<?= $data->uploadFoto; ?>" readonly>
            </div>
        <?php else: ?>
            <p>Pengguna tidak ditemukan.</p>
        <?php endif; ?>
        <div class="mt-4" style="text-align: center; padding-bottom:70px;">
            <button class="button mb-2" onclick="location.href='<?php echo site_url('DaftarKomunitas/index'); ?>'">Kembali</button>
        </div>
    </center>
    
</div>
