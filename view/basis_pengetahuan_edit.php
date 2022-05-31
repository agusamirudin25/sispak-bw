<?php
session_start();

if (isset($_SESSION['status']) != 'login') {
    header("location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIMAHIR</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../template/vendors/feather/feather.css">
    <link rel="stylesheet" href="../template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- endinject -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../template/images/favicon.png" />
    <link rel="stylesheet" href="../template/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="../template/indexuser.php"><img src="../template/images/logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../template/indexuser.php"><img src="../template/images/logo2.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../template/indexpakar.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/basis_pengetahuan.php">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Basis Pengetahuan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/pakarkonsul.php">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Konsultasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/documentation/documentation.html">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Laporan</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4 class="card-title">Edit Basis Pengetahuan</h4>
                                    </center>

                                    <?php
                                    require_once '../class/koneksi.php';
                                    require_once '../class/class_basis_pengetahuan.php';
                                    $dataPenyakit = $con->prepare("SELECT * FROM tb_penyakit");
                                    $dataPenyakit->execute();
                                    $dataPenyakit = $dataPenyakit->fetchAll();

                                    $dataGejala = $con->prepare("SELECT * FROM tb_gejala");
                                    $dataGejala->execute();
                                    $dataGejala = $dataGejala->fetchAll();

                                    $dataPengetahuan = $con->prepare("SELECT * FROM tb_pengetahuan WHERE id = :id");
                                    $dataPengetahuan->bindParam(':id', $_GET['id']);
                                    $dataPengetahuan->execute();
                                    $dataPengetahuan = $dataPengetahuan->fetch();

                                    if (isset($_POST['simpan'])) {
                                        $kode_penyakit = $_POST['penyakit'];
                                        $kode_gejala = $_POST['gejala'];
                                        $id = $_GET['id'];
                                        $pengetahuan->Editpengetahuan($id, $kode_gejala, $kode_penyakit);
                                    }
                                    ?>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Penyakit</label>
                                            <select class="w-100 form-control" name="penyakit" id="penyakit" required>
                                                <option value="">Pilih Penyakit</option>
                                                <?php foreach ($dataPenyakit as $penyakit) : ?>
                                                    <option <?= $dataPengetahuan['kode_penyakit'] == $penyakit['kode_penyakit'] ? 'selected' : null ?> value="<?= $penyakit['kode_penyakit'] ?>"><?= "({$penyakit['kode_penyakit']}) {$penyakit['nama_penyakit']}" ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gejala</label>
                                            <select class="w-100 form-control" name="gejala" id="gejala" required>
                                                <option value="">Pilih Gejala</option>
                                                <?php foreach ($dataGejala as $gejala) : ?>
                                                    <option <?= $dataPengetahuan['kode_gejala'] == $gejala['kode_gejala'] ? 'selected' : null ?> value="<?= $gejala['kode_gejala'] ?>"><?= "({$gejala['kode_gejala']}) {$gejala['nama_gejala']}" ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">

                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../template/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../template/js/gmail.js"></script>
        <script src="../template/js/deletepengguna.js"></script>
        <script src="../template/js/off-canvas.js"></script>
        <script src="../template/js/hoverable-collapse.js"></script>
        <script src="../template/js/template.js"></script>
        <script src="../template/js/settings.js"></script>
        <script src="../template/js/todolist.js"></script>
        <script src="../template/vendors/select2/select2.min.js"></script>
        <!-- endinject -->
        <script>
            function searchTable() {
                var input;
                var saring;
                var status;
                var tbody;
                var tr;
                var td;
                var i;
                var j;
                input = document.getElementById("input");
                saring = input.value.toUpperCase();
                tbody = document.getElementsByTagName("tbody")[0];;
                tr = tbody.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td");
                    for (j = 0; j < td.length; j++) {
                        if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                            status = true;
                        }
                    }
                    if (status) {
                        tr[i].style.display = "";
                        status = false;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            if ($(".js-example-basic-single").length) {
                $(".js-example-basic-single").select2();
            }
        </script>
        <script src="../template/js/logout.js"></script>
</body>

</html>