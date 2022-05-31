<?php

require_once "koneksi.php";

//Logout
    class logout extends koneksi {
        public function Logout(){
            session_start();
            session_destroy();
            header("location:../login/login.php");
        }
    }

$Logout=new logout($con);

$Logout->Logout();