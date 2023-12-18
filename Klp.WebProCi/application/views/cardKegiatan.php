<?php foreach ($kegiatan as $keg): ?>
    <div class="col-md 4" style="padding: 5px 15px;">
        <a href="<?php echo site_url('Dashboardkomunitas/detail/' . $keg->id); ?>" style="text-decoration: none;">
            <div class="card cardKeg">
                <img class="card-img-top" style="height: 250px;"
                    src="<?= base_url() ?>uploads/<?= isset($keg->uploadFile) ? $keg->uploadFile : '' ?>"
                    alt="Card image cap">
                <div class="card-body cB">
                    <h5 class="card-title cH"
                        style="color: #000;font-family: Arial;font-size: 20px;font-style: normal;font-weight: 700;line-height: normal;">
                        <?= isset($keg->nama_kegiatan) ? $keg->nama_kegiatan : '' ?>
                    </h5>
                    <p class=" card-text cT1">Oleh Karawang Peduli</p>
                    <p class="card-text cT2"><img src="<?= base_url() ?>assets/img/calendar.png" alt=""
                            style="margin-right:8px;" />
                        <?php
                        // Mengonversi format tanggal
                        $formattedDate = date("d F Y", strtotime($keg->tanggal_kegiatan));
                        echo $formattedDate;
                        ?>
                    </p>
                    <p class="card-text cT3"><img src="<?= base_url() ?>assets/img/location.png" alt=""
                            style="margin-right:8px;" />
                        <?= isset($keg->lokasi_kegiatan) ? $keg->lokasi_kegiatan : '' ?>
                    </p>
                </div>
            </div>
        </a>
    </div>
<?php endforeach; ?>