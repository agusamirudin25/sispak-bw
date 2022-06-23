<?php
session_start();

if(isset($_SESSION['status']) != 'login'){
  header("location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../template/vendors/feather/feather.css">
    <link rel="stylesheet" href="../template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="../template/index.php"><img
                        src="../template/images/logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../template/index.php"><img
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

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../template/index.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Kelola Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="tb_gejala.php">Kelola Data <br>
                                        Gejala</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="penyakit/tb_penyakit.php">Kelola Data
                                        <br>
                                        Penyakit</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Data Pengguna</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../view/pengguna.php">Kelola Data <br>
                                        Pengguna</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">





                        <!-- partial -->
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Edit Gejala</h4>
                                                <p class="card-description">

                                                </p>

                                                <?php

                                                        require_once '../class/class_gejala.php';

                                                        if(isset($_POST['simpan'])){
                                                          $kode_gejala = $_POST['kode_gejala'];
                                                            $nama_gejala = $_POST['nama_gejala'];
                                                            

                                                            $gejala->Editgejala($kode_gejala, $nama_gejala);
                                                            echo "<script> alert('Data Berhasil Diubah');
                                                            window.location='tb_gejala.php';
                                                            </script>";
                                                        }

                                                        ?>
                                                <form class="forms-sample" method="POST">
                                                    <?php
                    require_once '../class/koneksi.php';
                    $kode_gejala = $_GET['id'];
                    $query = "SELECT * FROM tb_gejala WHERE kode_gejala = '{$kode_gejala}'";
                    $query = $con->prepare($query);
                    $query->execute();

                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                      ?>


                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Kode Gejala</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputUsername1" placeholder="Kode Gejala"
                                                            value="<?php echo $row['kode_gejala']?>" name="kode_gejala"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Gejala</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Nama Gejala"
                                                            value="<?php echo $row['nama_gejala']?>" name="nama_gejala">
                                                    </div>
                                                    <?php

                    }
                    ?>
                                            </div>
                                            <center>
                                                <button type="submit" class="btn btn-primary" style="width: 100px;"
                                                    name=" simpan">Simpan</button>

                                                <input type="button" class=" btn btn-danger " style="width: 100px;"
                                                    value="Batal" onclick="history.back(-1)" />
                                            </center>
                                            </form>
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
    </div>


    <!-- partial -->
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                    class="ti-heart text-danger ml-1"></i></span>
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
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>