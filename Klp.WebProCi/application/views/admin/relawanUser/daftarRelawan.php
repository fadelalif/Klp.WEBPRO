    <div class="container" style="width: 83%; margin-top:90px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 class="mb-3">Relawan Control</h1>
            <button class="button mb-2" onclick="location.href='<?php echo site_url('DaftarRelawan/tambahHalaman'); ?>'"><i class="fas fa-user-plus" style="margin:2px; margin-right:10px;"></i>Tambah</button>
        </div>
        <div class="inner-container" style="margin-bottom:100px;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
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
                            <td><?= $row->firstname ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->username ?></td>
                            <!-- <td><?= $row->password ?></td> -->
                            <td>
                                <button class="button" onclick="location.href='<?php echo site_url('DaftarRelawan/ShowDetail/' . $row->id); ?>'"><i class="fas fa-eye"></i></button>
                                <button class="button" onclick="location.href='<?php echo site_url('DaftarRelawan/edit/' . $row->id); ?>'"><i class="fas fa-pencil"></i></button>
                                <button class="buttonDel" onclick="hapusData('<?= site_url('DaftarRelawan/hapus/' . $row->id); ?>')"><i class="fas fa-trash"></i></button>
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
            if (confirm('Apakah Anda yakin ingin menghapus User ini?')) {
                location.href = url;
        }
    }
    </script>