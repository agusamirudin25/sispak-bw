<?php

error_reporting(0);
require_once "koneksi.php";


class login extends koneksi
{

    //Login
    public function logincheck($username, $password)
    {
        $loginuser = $this->db->prepare("SELECT * from tb_login where username ='$username' and password ='$password'");
        $loginuser->execute();

        while ($row = $loginuser->fetch(PDO::FETCH_ASSOC)) {
            session_start();
            if ($loginuser->rowCount() == 1) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;
                $_SESSION['hak_akses'] = $row['hak_akses'];
                $_SESSION['status'] = "login";

                if ($_SESSION['hak_akses'] == 'admin') {
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({

    icon: 'success',
    title: 'Login Berhasil',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "../template/index.php";
});
</script>
<?php
                exit;

                }

                if ($_SESSION['hak_akses'] == 'pakar') {
                ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({

    icon: 'success',
    title: 'Login Berhasil',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "../template/indexpakar.php";
});
</script>
<?php
                exit;
                }

                if ($_SESSION['hak_akses'] == 'user') {
                ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({

    icon: 'success',
    title: 'Login Berhasil',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "../template/indexuser.php";
});
</script>
<?php
                exit;
                }
            }
        }
        echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username atau password tidak ditemukan!',
          });
        </script>";
    }
}

$login = new login($con);

?>