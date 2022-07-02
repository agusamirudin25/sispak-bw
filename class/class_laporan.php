<?php

require_once 'koneksi.php';
require_once '../fpdf/fpdf.php';

//laporan
class laporan extends koneksi
{
    public function tampilLaporan($query)
    {
        $query = $this->db->prepare($query);
        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
<tr>
    <td><?= "{$row['nama_user']}"; ?></td>
    <td><?= "{$row['penyakit']}"; ?></td>
    <td><?= "{$row['nama_penyakit']}"; ?></td>
    <td><?= "{$row['tanggal']}"; ?></td>
</tr>
<?php endwhile;
    }

    public function cetakLaporan()
    {
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->Cell(0,5, 'KLINIK PRATAMA BUNDA RAHAYU', 0, 1, 'C',false);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(0,3, 'Jalan Raya Rawa Gebang Nomor 47, Jatibaru, Kecamatan Cikarang Timur, Kabupaten Bekasi, Jawa Barat 17530', 0, 1, 'C',false);
        $pdf->Cell(0,5, 'No.Telp: 083815550881', 0, 1, 'C',false);
        $pdf->Ln(8);
        $pdf->Cell(190,0.6,'','0','1','C',true);
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(200, 10, 'LAPORAN HASIL DIAGNOSA', 0, 1, 'C');
        
        $pdf->setXY(20, 40);
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 5, '', 0, 1);
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(45, 10, 'Nama', 1, 0, 'C');
        $pdf->Cell(35, 10, 'Kode Penyakit', 1, 0, 'C');
        $pdf->Cell(55, 10, 'Nama Penyakit', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Tanggal', 1, 1, 'C');
        $query_diagnosa = "SELECT tb_diagnosa.*, tb_login.nama as nama_user, tb_penyakit.nama_penyakit FROM tb_diagnosa JOIN tb_login ON tb_diagnosa.username = tb_login.username JOIN tb_penyakit ON tb_diagnosa.penyakit = tb_penyakit.kode_penyakit";
        $result_diagnosa = $this->db->prepare($query_diagnosa);
        $result_diagnosa->execute();
        $diagnosa = $result_diagnosa->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($diagnosa as $key => $row) {
            $pdf->SetFont('Times', '', 12);
            $pdf->Cell(10, 5, $key + 1, 1, 0, 'C');
            $pdf->Cell(45, 5, $row['nama_user'], 1, 0, 'L');
            $pdf->Cell(35, 5, $row['penyakit'], 1, 0, 'L');
            $pdf->Cell(55, 5, $row['nama_penyakit'], 1, 0, 'L');
            $pdf->Cell(40, 5, $row['tanggal'], 1, 1, 'C');
        }

        $pdf->Output();
    }


}

$laporan = new laporan($con);