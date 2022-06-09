<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIMAHIR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<style>
#toggle {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    width: 25px;
    height: 25px;
    background: url(../images/show.png);
    background-size: cover;
    cursor: pointer;
}

#toggle.hide {
    background: url(../images/hide.png);
    background-size: cover;
}
</style>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/logo.png" alt="IMG" style="margin-top: -30%;margin-left:-20%;">
                </div>

                <form class="login100-form validate-form" method="POST">
                    <?php
                                      require_once "../class/class_login.php";
                          
                                      if(isset($_POST['simpan'])){
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $login->logincheck($username,$password);
                                      } 
                                      ?>
                    <span class="login100-form-title">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Username harus di isi">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password harus di isi">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="simpan">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Tidak punya akun?
                        </span>
                        <a class="txt2" href="registrasi.php">
                            Registrasi Sekarang
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">

                            <i aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center text-white"
        style=" width: 100%; height: 50px; padding-left: 10px; line-height: 50px;position: absolute;bottom: 0px;">
        © 2022 Copyright :
        <a class="text-reset fw-bold" href="../view/profil.php" style="color:white;">Alvin Supriyan</a>
    </footer>

    <script type="text/javascript">
    const password = document.getElementById('inputPassword');
    const toggle = document.getElementById('toggle');

    function showHide() {
        if (password.type === 'password') {
            password.setAttribute('type', 'text');
            toggle.classList.add('hide')
        } else {
            password.setAttribute('type', 'password');
            toggle.classList.remove('hide')
        }
    }
    </script>

    <script>
    function myFunction() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>