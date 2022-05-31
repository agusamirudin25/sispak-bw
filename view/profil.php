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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- endinject -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>

<style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


img {
    max-width: 100%;
    display: block;
}

ul {
    list-style: none;
}

/* Utilities */
.card::after,
.card img {
    border-radius: 50%;
}

.card {
    padding: 2.5rem 2rem;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, .5);

    box-shadow: 0 0 30px rgba(0, 0, 0, .15);

    position: relative;
    transform-style: preserve-3d;

}

.card::before,
.card::after {
    content: '';
    position: absolute;
    z-index: -1;
}

.card::before {
    width: 100%;
    height: 100%;
    border: 1px solid #FFF;
    border-radius: 10px;
    top: -.7rem;
    left: -.7rem;
}

.card::after {
    height: 15rem;
    width: 15rem;
    background-color: #4172f5aa;
    top: -8rem;
    right: -8rem;
    box-shadow: 2rem 6rem 0 -3rem #FFF
}

.card img {
    width: 8rem;
    min-width: 80px;
    box-shadow: 0 0 0 5px #FFF;
}

.infos {
    margin-left: 1.5rem;
}

.name {
    margin-bottom: 1rem;
}

.name h2 {
    font-size: 1.3rem;
}

.name h4 {
    font-size: .8rem;
    color: #333
}

.text {
    font-size: .9rem;
    margin-bottom: 1rem;
}

.stats {
    margin-bottom: 1rem;
}

.stats li {
    min-width: 5rem;
}

.stats li h3 {
    font-size: .99rem;
}

.stats li h4 {
    font-size: .75rem;
}

.links button {
    font-family: 'Poppins', sans-serif;
    min-width: 140px;
    padding: .6rem;
    border: 1px solid #222;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: all .25s linear;
}

.links .follow,
.links .view:hover {
    background-color: #222;
    color: #FFF;
}

.links .view,
.links .follow:hover {
    background-color: transparent;
    color: #222;
}

@media screen and (max-width: 450px) {
    .card {
        display: block;
    }

    .infos {
        margin-left: 0;
        margin-top: 1.5rem;
    }

    .links button {
        min-width: 100px;
    }
}
</style>

<body>


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
                <div class="row flex-grow">
                    <div class="col-lg-7 mx-auto text-white">
                        <div class="row align-items-center d-flex flex-row">
                            <div class="col-lg-6 text-lg-right pr-lg-4">
                                <h1 class="display-1 mb-0"></h1>
                            </div>
                            <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                            </div>
                        </div>
                        <div class="row mt-5">

                        </div>
                        <div class="row mt-5">

                        </div>
                    </div>


                    <!-- partial:../../partials/_navbar.html -->



                </div>


                <!-- partial -->




                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h4 class="card-title">Profil</h4>
                            </center>

                            </head>

                            <body>
                                <div class="card">
                                    <div class="img">
                                        <img src="IMG_2960.JPG">
                                    </div>
                                    <div class="infos">
                                        <div class="name">
                                            <form>

                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value=": Alvin Supriyan">
                                                    </div>


                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">NPM</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value=": 4357006185012">
                                                    </div>

                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Prodi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value=": Informatika">
                                                    </div>

                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Pembimbing
                                                        1</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value=": Arif Budimansyah Purba">
                                                    </div>

                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label">Pembimbing
                                                        2</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value=": Wawan Kusdiawan">
                                                    </div>
                                                </div>
                                            </form>

                            </body>
                            <!-- Button trigger modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- partial -->
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

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
    <script src="../template/js/delete.js"></script>
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
    <!-- endinject -->

</body>

</html>