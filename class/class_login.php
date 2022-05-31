<?php

error_reporting(0);
require_once "koneksi.php";


class login extends koneksi{

    //Login
    public function logincheck($username, $password){
        $loginuser = $this->db->prepare("SELECT * from tb_login where username ='$username' and password ='$password'");
        $loginuser->execute();
       
        while($row=$loginuser->fetch(PDO::FETCH_ASSOC))
        {
            session_start();
            if($loginuser->rowCount()==1){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;
                $_SESSION['hak_akses'] = $row['hak_akses'];
                $_SESSION['status'] = "login";

                if($_SESSION['hak_akses']=='admin'){
                    header("location:../template/index.php");
                }
                if($_SESSION['hak_akses']=='pakar'){
                    header("location:../template/indexpakar.php");
                }

                if($_SESSION['hak_akses']=='user'){
                    header("location:../template/indexuser.php");
                }
            }
        }
    }
}

$login = new login($con);

?>