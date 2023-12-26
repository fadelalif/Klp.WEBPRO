<div class="container" style="width: 83%; margin-top:90px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 class="mb-3">Komunitas Control</h1>
        </div>
        <div class="inner-container" style="margin-bottom:100px;">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Komunitas</th>
                        <th>Email</th>
                        <th>Penanggung Jawab Komunitas</th>
                        <th>Kategori Komunitas</th>
                        <!-- <th>Password</th> -->
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
                            <td><?= $row->nama_komunitas ?></td>
                            <td><?= $row->email_komunitas ?></td>
                            <td><?= $row->penanggung_jawab ?></td>
                            <td><?= $row->kategori_komunitas ?></td>
                            <!-- <td><?= $row->password ?></td> -->
                            <td>
                                <button class="button" onclick="location.href='<?php echo site_url('DaftarKomunitas/ShowDetailkomunitas/' . $row->id); ?>'"><i class="fas fa-eye"></i></button>
                                <button class="button" onclick="location.href='<?php echo site_url('DaftarKomunitas/edit/' . $row->id); ?>'"><i class="fas fa-pencil"></i></button>
                                <button class="buttonDel" onclick="hapusData('<?= site_url('DaftarKomunitas/hapus/' . $row->id); ?>')"><i class="fas fa-trash"></i></button>
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
            if (confirm('Apakah Anda yakin ingin menghapus Komunitas ini?')) {
                location.href = url;
        }
    }
    </script>