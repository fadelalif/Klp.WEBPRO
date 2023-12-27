<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relawanin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="pb-5">
    <?php include 'application/views/navKomunitas.php'; ?>
    </div>
    <section id="daftarPage" style="padding-top: 53px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <section class="nav navProf nav-pills nav-fill container-expand  " style="padding: top 99px; " id="pilhan">
                        <a class="nav-item nav-link navProfButt active" href="<?php echo site_url('kegiatan/detailKeg/'); ?>">
                            <i style="color: #00897b; margin-right:5px;"></i>Form</a>
                        <a class="nav-item nav-link navProfButt active" href="<?= base_url() ?>index.php/DbRelawan">
                            <i style="color: #00897b; margin-right:5px;"></i>Relawan</a>
                    </section>

                    <div class="pt-5">
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nama Kegiatan</th>
                                <th>Email</th>
                                <th>No Tlp</th>
                                <th>Mengapa anda tertarik untuk aktivitas ini?</th>
                                <th>Apa Pengalamanmu?</th>
                                <th>Upload CV anda Disini!</th>
                            </tr>
                            <?php if ($relawan !== null): ?>
                                <?php foreach ($relawan as $r): ?>
                                    <tr>
                                        <td><?php echo $r->id; ?></td>
                                        <td><?php echo $r->nama; ?></td>
                                        <td><?php echo $r->email; ?></td>
                                        <td><?php echo $r->no_tlp; ?></td>
                                        <td><?php echo $r->alasan; ?></td>
                                        <td><?php echo $r->pengalaman; ?></td>
                                        <td><?php echo isset($r->cv) ? $r->cv : ''; ?></td>

                                    </tr> 
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7">No data available.</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                        <div class="mt-4" style="text-align: center; padding-bottom:15px;">
                            <button type="button" onclick="location.href='<?= base_url() ?>index.php/Kegiatan'" class="btn">Back</button>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer -->
    <?php include 'application/views/footer.php'; ?>
    <!--Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>