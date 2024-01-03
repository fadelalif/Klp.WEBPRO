<!-- View: application/views/viewUser.php -->

<div class="container mt-5" style="padding-bottom:50px;">
    <center>
        <h1 style="padding-top:50px;">Data dari Database</h1>
        <?php if (isset($data) && !empty($data)): ?>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:110px">ID</span>
                <input type="text" class="form-control" value="<?= $data->id; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:30px">Nama Depan</span>
                <input type="text" class="form-control" value="<?= $data->firstname; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" >Nama Belakang</span>
                <input type="text" class="form-control" value="<?= $data->lastname; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:30px">Jenis Kelamin</span>
                <input type="text" class="form-control" value="<?= $data->jenis_kelamin; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:85px">Email</span>
                <input type="text" class="form-control" value="<?= $data->email; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:50px">Username</span>
                <input type="text" class="form-control" value="<?= $data->username; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:58px">Telphone</span>
                <input type="text" class="form-control" value="<?= $data->nmrTelphone; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:30px">Tanggal Lahir</span>
                <input type="text" class="form-control" value="<?= $data->tgl_lahir; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:55px">Pekerjaan</span>
                <input type="text" class="form-control" value="<?= $data->pekerjaan; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:70px">Institusi</span>
                <input type="text" class="form-control" value="<?= $data->institusi; ?>" readonly>
            </div>
            <div class="input-group mb-4" style="max-width: 568px; margin-top:30px;">
                <span class="input-group-text" id="inputGroup-sizing-default" style="padding-right:70px">Provinsi</span>
                <input type="text" class="form-control" value="<?= $data->provinsi; ?>" readonly>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <?php if ($data->uploadFoto): ?>
                    <p>File terkini: <?= $data->uploadFoto; ?></p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>Pengguna tidak ditemukan.</p>
        <?php endif; ?>
        <div class="mt-4" style="text-align: center; padding-bottom:70px;">
            <button class="button mb-2" onclick="location.href='<?php echo site_url('DaftarRelawan/index'); ?>'">Kembali</button>
        </div>
    </center>
    
</div>
