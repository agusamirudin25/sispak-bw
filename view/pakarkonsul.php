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
    <link rel="stylesheet" type="text/css" href="../template/js/select.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../template/css/pakar.css">
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- endinject -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>

<style type="text/css">

</style>

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

            <!-- side bar -->
            <?php require_once '../template/menu_pakar.php' ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">

                                        <div class="row clearfix">

                                            <div class="col-lg-12">
                                                <div class="card chat-app">
                                                    <div id="plist" class="people-list">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                Nama
                                                            </div>

                                                        </div>
                                                        <ul class="list-unstyled chat-list mt-2 mb-0">

                                                            <?php
                                        require_once '../class/class_konsul.php';
                                        $query="SELECT DISTINCT tb_konsul.username, tb_konsul.tujuan, tb_login.nama FROM tb_konsul JOIN tb_login ON tb_konsul.username = tb_login.username WHERE tujuan='pakar'";
                                        $konsul->Tampilpakar($query);
                                        ?>

                                                        </ul>
                                                    </div>

                                                    <div class="chat">
                                                        <div class="chat-header clearfix">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="chat-about">

                                                                        <?php
                                if(isset($_GET['id'])){
                                    require_once '../class/koneksi.php';

                                    $query = "SELECT tb_login.nama, tb_konsul.username FROM tb_konsul JOIN tb_login ON tb_konsul.username = tb_login.username WHERE tb_konsul.username='{$_GET['id']}'";
                                    $nama = $con->prepare($query);
                                    $nama->execute();

                                    while($row=$nama->fetch(PDO::FETCH_ASSOC)){
                                        $tagnama=$row['nama'];
                                    }

                                ?>
                                                                        <h6 class="m-b-0"><?php echo $tagnama ?>
                                                                        </h6>
                                                                        <?php
                                }
                                ?>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="chat-history">
                                                            <ul class="m-b-0">
                                                                <div class="auto">
                                                                    <li class="clearfix">

                                                                        <?php
                                if(isset($_GET['id'])){


                                $query="SELECT * FROM tb_konsul WHERE username='{$_GET['id']}' or tujuan = '{$_GET['id']}'";
                                $konsul->Tampilkonsul($query,'pakar');
                                ?>
                                                                </div>

                                                                <?php
                                  if(isset($_POST['simpan'])){
                                    date_default_timezone_set("Asia/Jakarta");
                                    $username = $_SESSION['username'];
                                    $pesan = $_POST['pesan'];
                                    $tujuan = $_GET['id'];
                                    $waktu = date("Y-m-d H:i:s");
                                    
                                    $konsul->Tambahkonsul($username,$pesan,$tujuan,$waktu);
                                  }
                                  ?>

                                                                <form method="POST">
                                                                    <div class="chat-message clearfix">
                                                                        <div class="input-group mb-0">
                                                                            <div class="input-group-prepend">
                                                                                <span></span>
                                                                            </div>
                                                                            <input type="text" class="form-control"
                                                                                name="pesan"
                                                                                placeholder="Ketik pesan disini..."
                                                                                required>
                                                                            <button type="submit"
                                                                                class=" input-group-text "
                                                                                name="simpan"><i
                                                                                    class="fa fa-paper-plane"
                                                                                    aria-hidden="true"></i></button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php
                }
                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                        ?? 2022 : <a class="text-decoration-none fw-bolder" href="../view/profil.php"
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
    <script src="../template/js/deletepengguna.js"></script>
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
    <!-- endinject -->

    <script>
    function prosesMenu() {
        var input = document.getElementById("navbar-search-input");
        var filter = input.value.toLowerCase();
        var ul = document.getElementById("menu");
        var li = document.querySelectorAll("li")
        console.log(li)
        for (var i = 0; i < li.length; i++) {
            var ahref = document.querySelectorAll("a")[i];
            if (ahref.innerHTML.toLowerCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
</body>

</html>