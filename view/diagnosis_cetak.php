<?php
session_start();
require_once '../class/class_diagnosis.php';
$kode_gejala = $_SESSION['gejala'];
$kode_penyakit = $_SESSION['penyakit'];
$diagnosis->cetakDiagnosis($kode_gejala, $kode_penyakit);