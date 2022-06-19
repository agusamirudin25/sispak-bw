<?php
session_start();
require_once '../fpdf/fpdf.php';
require_once '../class/koneksi.php';

$pdf = new \FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(200, 10, 'LAPORAN HASIL DIAGNOSA', 0, 1, 'C');

$pdf->setXY(21, 28);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(10, 5, '', 0, 1);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(10, 10, 'No', 1, 0, 'C');
$pdf->Cell(45, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(35, 10, 'Kode Penyakit', 1, 0, 'C');
$pdf->Cell(55, 10, 'Nama Penyakit', 1, 0, 'C');
$pdf->Cell(40, 10, 'Tanggal', 1, 1, 'C');
$query_diagnosa = "SELECT tb_diagnosa.*, tb_login.nama as nama_user, tb_penyakit.nama_penyakit FROM tb_diagnosa JOIN tb_login ON tb_diagnosa.username = tb_login.username JOIN tb_penyakit ON tb_diagnosa.penyakit = tb_penyakit.kode_penyakit";
$result_diagnosa = $con->prepare($query_diagnosa);
$result_diagnosa->execute();
$diagnosa = $result_diagnosa->fetchAll(PDO::FETCH_ASSOC);

foreach ($diagnosa as $key => $row) {
    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(10, 10, $key + 1, 1, 0, 'C');
    $pdf->Cell(45, 10, $row['nama_user'], 1, 0, 'L');
    $pdf->Cell(35, 10, $row['penyakit'], 1, 0, 'L');
    $pdf->Cell(55, 10, $row['nama_penyakit'], 1, 0, 'L');
    $pdf->Cell(40, 10, $row['tanggal'], 1, 1, 'C');
}

// $pdf->SetFont('Times', '', 12);
// $pdf->Cell(10, 5, '', 0, 1);
// $pdf->SetFont('Times', 'B', 12);
// $query_gejala = "SELECT tb_diagnosa.*, tb_login.nama as nama_user, tb_penyakit.nama_penyakit FROM tb_diagnosa JOIN tb_login ON tb_diagnosa.username = tb_login.username JOIN tb_penyakit ON tb_diagnosa.penyakit = tb_penyakit.kode_penyakit";
// $result_gejala = $con->prepare($query_gejala);
// $result_gejala->execute();
// $gejala = $result_gejala->fetchAll(PDO::FETCH_ASSOC);
// foreach ($gejala as $key => $row) {
//     $pdf->SetFont('Times', '', 12);
//     $pdf->Cell(170, 10, ($key + 1) . ". {$row['nama_gejala']}", 0, 1, 'L');
// }

$pdf->Output();