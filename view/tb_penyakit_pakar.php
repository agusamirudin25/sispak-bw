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
            <?php require_once '../template/menu_pakar.php' ?>

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
                                    <div class="row justify-content-between">
                                        <div class="col-4">
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
                                                        Penyebab
                                                    </th>
                                                    <th>
                                                        Foto
                                                    </th>
                                                    <th>
                                                        Status
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
                                            $query = "SELECT tb_penyakit.*, tb_login.nama FROM tb_penyakit LEFT JOIN tb_login ON tb_penyakit.verifikasi = tb_login.username";
                                            $penyakit->Tampilpenyakit($query, 'pakar');
                                            ?>

                                        </table>
                                    </div>
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
    $(document).on('click','.verif_penyakit',function(){
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Apakah Anda Ingin Memverifikasi penyakit ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Verifikasi',
        }).then((result) =>{
            if (result.isConfirmed){
                $.ajax({
                    method: "POST",
                    url: "../class/class_penyakit.php",
                    data: {id_verifikasi:id},
                    cache: false,
                    success: function(data){
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Diverifikasi',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result)=>{
                            location.reload();
                        });
                    }
                });
            }
        })
    });
    </script>
    <script src="../template/js/logout.js"></script>
    <!-- endinject -->
</body>

</html>