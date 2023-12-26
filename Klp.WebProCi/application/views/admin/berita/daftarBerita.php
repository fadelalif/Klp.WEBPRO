<div class="container" style="width: 83%; margin-top:90px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 class="mb-3">Berita</h1>
        <button class="button mb-2" onclick="location.href='<?php echo site_url('DaftarBerita/tambahHalamanBerita'); ?>'"><i class="fas fa-user-plus" style="margin:2px; margin-right:10px;"></i>Tambah</button>
    </div>
    <div class="inner-container" style="margin-bottom:100px;">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Judul Berita</th>
                    <th>Tanggal Berita</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $row):?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->id ?></td>
                        <td><?= $row->nama_berita ?></td>
                        <td><?= $row->tanggal_berita ?></td>
                        <td>
                            <button class="button" onclick="location.href='<?php echo site_url('DaftarBerita/editberita/' . $row->id); ?>'"><i class="fas fa-pencil"></i></button>
                            <button class="buttonDel" onclick="hapusData('<?= site_url('DaftarBerita/hapusberita/' . $row->id); ?>')"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
        new DataTable('#example');
        function hapusData(url) {
            if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                location.href = url;
        }
    }
</script>
