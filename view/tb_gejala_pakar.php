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
    <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <?php require_once '../template/menu_pakar.php' ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h4 class="card-title">Tabel Gejala</h4>
                                    </center>


                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Gejala</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">



                                                    <!-- TambahGejala -->
                                                    <?php

                                                            require_once '../class/class_gejala.php';

                                                            if(isset($_POST['simpan'])){
                                                                $kode_gejala = $_POST['kode_gejala'];
                                                                $nama_gejala = $_POST['nama_gejala'];
                                                             

                                                                $gejala->Insertgejala($kode_gejala, $nama_gejala);
                                                            }

                                                            ?>
                                                    <?php
                                                            require_once '../class/koneksi.php';

                                                                $query="SELECT kode_gejala FROM tb_gejala ORDER by kode_gejala desc limit 1";
                                                                $gj = $con->prepare($query);
                                                                $gj->execute();

                                                            while($row = $gj->fetch(PDO::FETCH_ASSOC)){

                                                            $kode_gejala=$row['kode_gejala'];
                                                            }

                                                            $query="SELECT COUNT(kode_gejala) FROM tb_gejala";
                                                            $gj = $con->prepare($query);
                                                            $gj->execute();
                                                            
                                                            while($row = $gj->fetch(PDO::FETCH_ASSOC)){
                                                                $count=$row['COUNT(kode_gejala)'];
                                                            }
        
                                                                if(isset($kode_gejala)){
                                                               
                                                                $kd1=(int)$count+1;
                                                                $kd2="G".$kd1;
                                                                }else{
                                                                $kd2='G01';
                                                                }
                                                            ?>

                                                    <form method="POST">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Kode Gejala</label>
                                                            <input type="text" class="form-control" name="kode_gejala"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                value="<?php echo "$kd2";?>"
                                                                placeholder="Masukan Kode Gejala" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Nama Gejala</label>
                                                            <input type="text" class="form-control" name="nama_gejala"
                                                                id="exampleInputPassword1"
                                                                placeholder="Masukan Nama Gejala" required>
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

                                    <p class="card-description"></p>
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
                                                        Kode Gejala
                                                    </th>
                                                    <th>
                                                        Nama Gejala
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
                                                require_once '../class/class_gejala.php';
                                                $query = "SELECT tb_gejala.*, tb_login.nama FROM tb_gejala LEFT JOIN tb_login ON tb_gejala.verifikasi = tb_login.username";
                                                $gejala->Tampilgejala($query, 'pakar');
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
    <script src="../template/js/delete.js"></script>
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
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
    $(document).on('click','.verif_gejala',function(){
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Apakah Anda Ingin Memverifikasi gejala ini?',
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
                    url: "../class/class_gejala.php",
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
</body>

</html>