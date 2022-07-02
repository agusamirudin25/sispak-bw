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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                <a class="navbar-brand brand-logo mr-5" href="../template/indexpakar.php"><img
                        src="../template/images/logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../template/indexpakar.php"><img
                        src="../template/images/logo2.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">

                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">

                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <i class="icon-cog text-primary"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="icon-head text-primary"></i>
                                <?php echo $_SESSION['username'];?>
                            </a>
                            <a class="dropdown-item">
                                <p class="logout">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </p>
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>


        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <?php require_once '../template/menu_pakar.php' ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">



                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4 class="card-title">Kelola Basis Pengetahuan</h4>
                                    </center>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                        Pengetahuan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <?php

                                                    require_once '../class/koneksi.php';
                                                    require_once '../class/class_basis_pengetahuan.php';
                                                    $dataPenyakit = $con->prepare("SELECT * FROM tb_penyakit WHERE verifikasi IS NOT NULL");
                                                    $dataPenyakit->execute();
                                                    $dataPenyakit = $dataPenyakit->fetchAll();

                                                    $dataGejala = $con->prepare("SELECT * FROM tb_gejala WHERE verifikasi IS NOT NULL");
                                                    $dataGejala->execute();
                                                    $dataGejala = $dataGejala->fetchAll();

                                                    if (isset($_POST['simpan'])) {
                                                        $kode_penyakit = $_POST['penyakit'];
                                                        $kode_gejala = $_POST['gejala'];
                                                        $pengetahuan->Tambahpengetahuan($kode_gejala, $kode_penyakit);
                                                    }
                                                    ?>
                                                    <form method="POST">
                                                        <div class="form-group">
                                                            <label>Penyakit</label>
                                                            <select class="w-100 form-control" name="penyakit"
                                                                id="penyakit" required>
                                                                <option value="">Pilih Penyakit</option>
                                                                <?php foreach ($dataPenyakit as $penyakit) : ?>
                                                                <option value="<?= $penyakit['kode_penyakit'] ?>">
                                                                    <?= "({$penyakit['kode_penyakit']}) {$penyakit['nama_penyakit']}" ?>
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Gejala</label>
                                                            <select class="w-100 form-control" name="gejala" id="gejala"
                                                                required>
                                                                <option value="">Pilih Gejala</option>
                                                                <?php foreach ($dataGejala as $gejala) : ?>
                                                                <option value="<?= $gejala['kode_gejala'] ?>">
                                                                    <?= "({$gejala['kode_gejala']}) {$gejala['nama_gejala']}" ?>
                                                                </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name="simpan">Simpan</button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-description">

                                    </p>
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Tambah Pengetahuan
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" placeholder="Cari" type='text' id='input'
                                                onkeyup='searchTable()'>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama Gejala (Kode)</th>
                                                    <th scope="col">Nama Penyakit (Kode)</th>
                                                    <th>
                                                        <center>
                                                            Opsi
                                                        </center>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <?php
                                            require_once '../class/class_basis_pengetahuan.php';
                                            $query = "SELECT tb_pengetahuan.*, tb_gejala.nama_gejala, tb_penyakit.nama_penyakit FROM tb_pengetahuan JOIN tb_gejala ON tb_pengetahuan.kode_gejala = tb_gejala.kode_gejala JOIN tb_penyakit ON tb_pengetahuan.kode_penyakit = tb_penyakit.kode_penyakit ORDER BY tb_pengetahuan.id_pengetahuan DESC";
                                            $pengetahuan->Tampilpengetahuan($query);
                                            ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                            © 2022 : <a class="text-decoration-none fw-bolder" href="../view/profil.php"
                                style="color:blue;">Alvin
                                Supriyan
                            </a>
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            <a class=" text-muted ml-1">STMIK Horizon Karawang</a></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="../template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../template/js/gmail.js"></script>
    <script src="../template/js/deletepengetahuan.js"></script>
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