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
    <title>SIMAHIR</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../template/vendors/feather/feather.css">
    <link rel="stylesheet" href="../template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../../../partials/_navbar.html -->
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
            <!-- partial:../../../../partials/_sidebar.html -->
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
                            <span class="menu-title">Master Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="tb_gejala.php">Kelola Data <br>
                                        Gejala</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="tb_penyakit.php">Kelola Data <br>
                                        Penyakit</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Kelola Pengguna</span>
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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4 class="card-title">Tabel Penyakit</h4>
                                    </center>

                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penyakit</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <!-- Tambah Penyakit -->
                                                    <?php
                                                            require_once '../class/class_penyakit.php';

                                                            if(isset($_POST['simpan'])){
                                                                $kode_penyakit = $_POST['kode_penyakit'];
                                                                $nama_penyakit = $_POST['nama_penyakit'];
                                                                $keterangan_penyakit = $_POST['keterangan_penyakit'];
                                                                $solusi = $_POST['solusi'];

                                                                $penyakit->Insertpenyakit($kode_penyakit, $nama_penyakit, $solusi, $keterangan_penyakit);
                                                            }
                                                            ?>
                                                    <?php
                                                            require_once '../class/koneksi.php';

                                                            $query="SELECT kode_penyakit FROM tb_penyakit ORDER by kode_penyakit desc limit 1";
                                                            $gj = $con->prepare($query);
                                                            $gj->execute();

                                                            while($row = $gj->fetch(PDO::FETCH_ASSOC)){

                                                              $kode_penyakit=$row['kode_penyakit'];
                                                            }
                                                            $query="SELECT COUNT(kode_penyakit) FROM tb_penyakit";
                                                            $gj = $con->prepare($query);
                                                            $gj->execute();
                                                            
                                                            while($row = $gj->fetch(PDO::FETCH_ASSOC)){
                                                                $count=$row['COUNT(kode_penyakit)'];
                                                            }
                                                            
                                                            if(isset($kode_penyakit)){
                                                             
                                                              $kd1=(int)$count+1;
                                                              $kd2="P".$kd1;
                                                            }else{
                                                              $kd2='P01';
                                                            }
                                                            ?>
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kode Penyakit</label>
                                                            <input type="text" class="form-control" name="kode_penyakit"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                value="<?php echo "$kd2";?>"
                                                                placeholder="Masukan Kode Penyakit" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Nama Penyakit</label>
                                                            <input type="text" class="form-control" name="nama_penyakit"
                                                                id="exampleInputPassword1"
                                                                placeholder="Masukan Nama Penyakit" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Keterangan
                                                                Penyakit</label>
                                                            <textarea class="form-control" required
                                                                name="keterangan_penyakit" id="keterangan_penyakit"
                                                                cols="30" rows="4"
                                                                placeholder="Masukan Keterangan Penyakit"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Foto</label>
                                                            <input type="file" class="form-control" name="foto"
                                                                id="exampleInputPassword1" required accept="image/png, image/jpg, image/jpeg">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Solusi</label>
                                                            <textarea class="form-control" required name="solusi"
                                                                id="solusi" cols="30" rows="4"
                                                                placeholder="Masukan Solusi"></textarea>
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
                                                Tambah Penyakit
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
                                                    <th>
                                                        Kode Penyakit
                                                    </th>
                                                    <th>
                                                        Nama Penyakit
                                                    </th>
                                                    <th>
                                                        Keterangan Penyakit
                                                    </th>
                                                    <th>
                                                        Solusi
                                                    </th>
                                                    <th>
                                                        <center>
                                                            Opsi
                                                        </center>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <?php
                                            require_once '../class/class_penyakit.php';
                                            $query = "SELECT * FROM tb_penyakit";
                                            $penyakit->Tampilpenyakit($query);
                                            ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- partial -->
                    <!-- content-wrapper ends -->
                    <!-- partial:../../../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                    template</a>
                                from
                                BootstrapDash. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted
                                & made with <i class="ti-heart text-danger ml-1"></i></span>
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
        <script src="../template/js/delete2.js"></script>
        <script src="../template/js/off-canvas.js"></script>
        <script src="../template/js/hoverable-collapse.js"></script>
        <script src="../template/js/template.js"></script>
        <script src="../template/js/settings.js"></script>
        <script src="../template/js/todolist.js"></script>
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
        </script>
        <script src="../template/js/logout.js"></script>
        <!-- endinject -->
</body>

</html>