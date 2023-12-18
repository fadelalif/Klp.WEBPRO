<!-- View: application/views/viewUser.php -->

<div class="container mt-5">
    <h1>Data dari Database</h1>
    <?php if (isset($data) && !empty($data)): ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ID: <?= $data->id; ?></h5>
                <p class="card-text">Nama depan: <?= $data->firstname; ?></p>
                <p class="card-text">Nama belakang: <?= $data->lastname; ?></p>
                <p class="card-text">Email: <?= $data->email; ?></p>
                <p class="card-text">Username: <?= $data->username; ?></p>
                <p class="card-text">Nomor telphone: <?= $data->nmr_telphone; ?></p>
                <p class="card-text">Tanggal lahir: <?= $data->tgl_lahir; ?></p>
                <p class="card-text">Pekerjaan: <?= $data->pekerjaan; ?></p>
                <p class="card-text">Institusi: <?= $data->institusi; ?></p>
                <p class="card-text">Provinsi: <?= $data->provinsi; ?></p>
            </div>
        </div>
    <?php else: ?>
        <p>Pengguna tidak ditemukan.</p>
    <?php endif; ?>
    <button class="button mb-2" onclick="location.href='<?php echo site_url('DaftarRelawan/index'); ?>'"><i class="fas fa-user-plus" style="margin:2px; margin-right:10px;"></i>Kembali</button>
</div>
