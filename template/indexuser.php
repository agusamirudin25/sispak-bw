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
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="indexuser.php"><img src="images/logo.png" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="indexuser.php"><img src="images/logo2.png"
                        alt="logo" /></a>
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

            <?php require_once '../template/menu_user.php' ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bayi Pasca Kelahiran</h4>
                                    <p class="card-description">



                                    <div class="row">
                                        <div class="col-md-6 grid-margin stretch-card">
                                            <div class="card tale-bg">
                                                <div class="card-people mt-auto" style=" padding-top: 1px;">
                                                    <img src="../login/images/bay.png">


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 grid-margin transparent">
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <p align="justify" style="font-size:1.2rem;font-family: sans-serif;">Bayi baru
                                        lahir normal adalah bayi
                                        yang memiliki
                                        berat
                                        badan
                                        lahir antara 2500-4000 gram, cukup bulan, lahir langsung menangis dan tidak
                                        ada kelainan congenital (cacat bawaan) yang berat (Rahardjo, 2014:9). Bayi
                                        baru lahir dan neonatus meliputi umur 0-28 hari. Kehidupan pada masa
                                        neonatus ini sangat rawan oleh karena itu memerlukan penyesuaian fisiologis
                                        agar bayi di luar kandungan dapat hidup sebaik-baiknya (Diah, 2012:1). Bayi
                                        merupakan individu yang lemah dan membutuhkan proses adaptasi serta harus
                                        bisa melakukan 4 penyesuaian untuk tetap hidup, yaitu penyesuaian perubahan
                                        suhu, menghisap dan menelan, bernafas dan membuang kotoran. Kesulitan
                                        penyesuaian atau adaptasi akan mengalami penurunan berat badan,
                                        keterlambatan perkembangan bahkan bisa terjadi meninggal dunia (Mansur,
                                        2009). Sumber lain mengatakan bayi baru lahir disebut dengan neonatus
                                        merupakan individu yang sedang bertumbuh dan baru saja mengalami trauma
                                        kelahiran serta harus dapat melakukan penyesuaian diri dari kehidupan
                                        intrauterin ke kehidupan ekstrauterin (Dewi, 2010:6). Menangis adalah satu
                                        satunya cara bayi untuk berkomunikasi kepada lingkungan sekitar. Tidak ada
                                        satu tangisan bayi dengan nada yang sama dalam mengungkapkan keinginannya
                                        maupun perasaannya (Dhieny dkk, 2014). Menurut data hasil Survei Demografi
                                        dan Kesehatan Indonesia (SDKI) tahun 2012, Angka Kematian Neonatal (AKN) di
                                        Indonesia sebesar 19 kematian/1000 untuk kelahiran hidup dan Angka Kematian
                                        Bayi (AKB) dengan jumlah 32 kematian/1000 kelahiran hidup (Depkes RI, 2013).
                                        Pada masa periode neonatal, bayi belum seutuhnya bisa beradaptasi dengan
                                        lingkungan sekitar. Sehingga bayi bisa rentan terkena penyakit yang umumnya
                                        bisa saja bawaan dari orang tua. Periode post neonatal adalah periode dimana
                                        bayi berusia 1 bulan hingga 12 bulan. Pada periode ini bayi mulai bisa
                                        beradaptasi dengan lingkungan sekitar sedikit demi sedikit. Jika bayi
                                        terkena penyakit pada periode post neonatal ini umumnya karena terpengaruh
                                        faktor lingkungan..</p>
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
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->

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
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="js/logout.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>