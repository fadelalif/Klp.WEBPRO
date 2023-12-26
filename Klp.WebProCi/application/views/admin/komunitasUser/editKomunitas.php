<div class="container" style="margin-top:80px; text-align:center;">
    <form action="<?php echo site_url('DaftarKomunitas/update/'.$data->id); ?>" method="post" enctype="multipart/form-data" role="form">
        <?php if (isset($data) && !empty($data)): ?>
            <h2 class="AkunHead fw-semibold " style="">Akun</h2>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="nama_komunitas"placeholder="Nama Komunitas" aria-label="Nama Komunitas"aria-describedby="basic-addon1" value="<?= $data->nama_komunitas; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="email_komunitas"placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?= $data->email_komunitas; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="password" class="form-control" name="password" placeholder="Kata Sandi" aria-label="Kata Sandi" aria-describedby="basic-addon1" value="<?= $data->password; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="password" class="form-control" name="re-password" placeholder="Konfirmasi Kata Sandi" aria-label="Konfirmasi Kata Sandi" aria-describedby="basic-addon1" value="<?= $data->password; ?>" />
            </div>
            <h2 class="AkunHead fw-semibold " style="">Data Komunitas</h2>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="nomorTlp_komunitas"placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1" value="<?= $data->nomorTlp_komunitas; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" name="penanggung_jawab" placeholder="Penanggung Jawab" aria-label="Penanggung Jawab" aria-describedby="basic-addon1" value="<?= $data->penanggung_jawab; ?>"/>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px"> <label class="input-group-text" for="kategori">Kategori Komunitas</label>
                <select class="form-select" id="kategori" name="kategori_komunitas" aria-describedby="basic-addon1">
                    <option value="<?= $data->kategori_komunitas; ?>"><?= $data->kategori_komunitas; ?></option>
                    <option value="Perhutana">Perhutana</option>
                    <option value="Perairan">Perairan</option>
                    <option value="Bersih-Bersih">Bersih-Bersih</option>
                    <option value="Daur Ulang">Daur Ulang</option>
                </select>
            </div>
            <div class="input-group mb-4 mx-auto form-floating" style="max-width: 568px">
                <textarea class="form-control" name="deskripsi_komunitas" placeholder="Leave a comment here" id="desc" style="height: 100px"><?= $data->deskripsi_komunitas; ?></textarea>
                <label for="desc">Description</label>
            </div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <label class="input-group-text" for="provinsi">Provinsi</label>
                    <select class="form-select" id="provinsi" name="provinsi_komunitas" aria-describedby="basic-addon1">
                        <option value="<?= $data->provinsi_komunitas; ?>"><?= $data->provinsi_komunitas; ?></option>
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
    </form>