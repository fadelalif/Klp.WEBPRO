<div class="container-fluid">
    <div class="row">
        <nav id="sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column mt-5">
                    <center>
                        <div class="gambar_profile mt-4 text-center" style="width:80px;">
                            <img src="<?= base_url('assets/img/iconProf.png') ?>" alt="Image Alt Text" class="img-fluid">
                        </div>
                    </center>
                    <h3 class="text-center mt-3">Admin</h3>
                    <li class="nav-item">
                        <a class="nav-link mt-3" onclick="location.href='<?php echo site_url('DaftarRelawan/index'); ?>'">
                            <i class="fas fa-user" style="margin-right:15px;"></i>Relawanin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSubMenu('sub1')">
                            <i class="fas fa-users" style="margin-right:10px;"></i>Komunitas
                        </a>
                        <div class="submenu" id="sub1">
                            <a style="font-size:11px; padding-left:25px" class="nav-link" href='<?php echo site_url('DaftarKomunitas/index'); ?>'><i class="fas fa-users" style="margin-right:10px;"></i>Komunitas Fix</a>
                            <a style="font-size:11px; padding-left:25px" class="nav-link" href='<?php echo site_url('DaftarKomunitas/index2'); ?>'><i class="fas fa-users" style="margin-right:10px;"></i>Komunitas Status</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="location.href='<?php echo site_url('DaftarBerita/index'); ?>'">
                            <i class="fas fa-newspaper" style="margin-right:11px;"></i> Berita
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<script>
    function toggleSubMenu(submenuId) {
        var submenu = document.getElementById(submenuId);
        if (submenu.style.display === "none" || submenu.style.display === "") {
            submenu.style.display = "block";
        } else {
            submenu.style.display = "none";
        }
    }
</script>