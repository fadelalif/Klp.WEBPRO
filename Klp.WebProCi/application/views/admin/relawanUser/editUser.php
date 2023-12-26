<div class="container" style="margin-top:80px; text-align:center;">
<form method="post" action="<?php echo site_url('DaftarRelawan/update/'.$data->id); ?>"method="post" action="<?php echo site_url('DaftarRelawan/update/'.$data->id); ?>" enctype="multipart/form-data" role="form">
    <?php if (isset($data) && !empty($data)): ?>
        <h2 class="AkunHead fw-semibold " style="text-align:center;">
            Edit Akun Relawan
        </h2>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Nama Depan" name="firstname" aria-label="Nama Depan" aria-describedby="basic-addon1" value="<?= $data->firstname; ?>" />
            <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname" aria-label="Nama Belakang" aria-describedby="basic-addon2" value="<?= $data->lastname; ?>" />
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" value="<?= $data->email; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Username" aria-label="username" name="username" aria-describedby="basic-addon1" value="<?= $data->username; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Kata Sandi" aria-label="Kata Sandi" name="password" aria-describedby="basic-addon1" value="<?= $data->password; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Konfirmasi Kata Sandi" aria-label="Konfirmasi Kata Sandi" name="password" aria-describedby="basic-addon1" value="<?= $data->password; ?>"/>
        </div>
        <h2 class="AkunHead fw-semibold " style="text-align:center;">
            Edit Data Diri Relawan
        </h2>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Nomor Telepon" name="nmrTelphone" aria-label="Nomor Telepon" aria-describedby="basic-addon1" value="<?= $data->nmrTelphone; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <label for="tgl_lahir" class="input-group-text">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" name="tgl_lahir" aria-describedby="basic-addon1" value="<?= $data->tgl_lahir; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <label class="input-group-text" for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-describedby="basic-addon1">
                <option value="<?= $data->jenis_kelamin; ?>"><?= $data->jenis_kelamin; ?></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" aria-label="Pekerjaan" aria-describedby="basic-addon1" value="<?= $data->pekerjaan; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Institusi" name="institusi" aria-label="Institusi" aria-describedby="basic-addon1" value="<?= $data->institusi; ?>"/>
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <label class="input-group-text" for="provinsi">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi" aria-describedby="basic-addon1">
                <option value="<?= $data->provinsi; ?>"><?= $data->provinsi; ?></option>
                <option value="Aceh">Aceh</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sumatera Barat">Sumatera Barat</option>
                <option value="Riau">Riau</option>
                <option value="Jambi">Jambi</option>
                <option value="Sumatera Selatan">Sumatera Selatan</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Lampung">Lampung</option>
                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                <option value="Kepulauan Riau">Kepulauan Riau</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="DI Yogyakarta">DI Yogyakarta</option>
                <option value="Banten">Banten</option>
                <option value="Bali">Bali</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Kalimantan Timur">Kalimantan Timur</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
                <option value="Sulawesi Utara">Sulawesi Utara</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Papua">Papua</option>
                <option value="Papua Barat">Papua Barat</option>
            </select>
        </div>

        <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload Foto</div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="file" name="uploadFoto" size="20" />
            <?php if ($data->uploadFoto): ?>
                    <p>File terkini: <?= $data->uploadFoto; ?></p>
                <?php endif; ?>
        </div>
    <?php else: ?>
        <p>Pengguna tidak ditemukan.</p>
    <?php endif; ?>

        <div class="mt-4" style="text-align: center; padding-bottom:100px;">
            <button class="button" type="submit">SUBMIT</button>
        </div>
    </div>
</form>