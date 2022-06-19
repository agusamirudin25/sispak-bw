<?php
session_start();
require_once '../fpdf/fpdf.php';
require_once '../class/koneksi.php';

$pdf = new \FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(200, 10, 'HASIL DIAGNOSA', 0, 1, 'C');


$pdf->SetFont('Times', '', 12);
$pdf->Cell(10, 5, '', 0, 1);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(45, 10, 'Gejala yang dipilih :', 0, 1, 'L');
$kode_gejala = $_SESSION['gejala'];
$query_gejala = "SELECT * FROM tb_gejala WHERE kode_gejala IN ('" . implode("','", $kode_gejala) . "')";
$result_gejala = $con->prepare($query_gejala);
$result_gejala->execute();
$gejala = $result_gejala->fetchAll(PDO::FETCH_ASSOC);
foreach ($gejala as $key => $row) {
    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(170, 10, ($key + 1) . ". {$row['nama_gejala']}", 0, 1, 'L');
}

$pdf->Cell(10, 5, '', 0, 1);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(45, 10, 'Penyakit :', 0, 1, 'L');
$kode_penyakit = $_SESSION['penyakit'];
$query_penyakit = "SELECT * FROM tb_penyakit WHERE kode_penyakit = '$kode_penyakit'";
$result_penyakit = $con->prepare($query_penyakit);
$result_penyakit->execute();
$penyakit = $result_penyakit->fetch(PDO::FETCH_ASSOC);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(170, 10, "Kode Penyakit : {$penyakit['kode_penyakit']}", 0, 1, 'L');
$pdf->Cell(170, 10, "Nama Penyakit : {$penyakit['nama_penyakit']}", 0, 1, 'L');
$pdf->MultiCell(180, 10, "{$penyakit['keterangan_penyakit']}", 0);
$pdf->Cell(180, 10, "Solusi :", 0, 1, 'L');
$pdf->MultiCell(180, 10, "{$penyakit['solusi']}", 0);

$pdf->Output();