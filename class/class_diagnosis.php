<?php

require_once 'koneksi.php';
require_once '../fpdf/fpdf.php';

class diagnosis extends koneksi
{

    public function tampilgejala($kode_penyakit)
    {
        $query = "SELECT tb_pengetahuan.*, tb_gejala.kode_gejala, tb_gejala.nama_gejala FROM tb_pengetahuan JOIN tb_gejala ON tb_pengetahuan.kode_gejala = tb_gejala.kode_gejala WHERE kode_penyakit = '$kode_penyakit'";
        $result = $this->db->prepare($query);
        $result->execute();
        $tujuan = isset($_SESSION['username']) ? 'diagnosis_hasil.php' : 'diagnosis_hasil_masyarakat.php';
?>
<form action="../view/<?= $tujuan ?>" method="post">
    <input type="hidden" name="kode_penyakit" id="kode_penyakit" value="<?= $kode_penyakit ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pilih Gejala</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) :
                                    $gejala = strtolower($row['nama_gejala']);
                                ?>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <div class="form-check form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="gejala[]" value="<?= $row['kode_gejala'] ?>"
                                            class="form-check-input">
                                        <?= "Apakah {$gejala} ?" ?>
                                        <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="col-md-12 mt-4">
                            <button type="submit" name="diagnosa" class="btn btn-primary">Diagnosa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    }

    public function hasilDiagnosis($kode_gejala, $kode_penyakit)
    {
        // show gejala
        $query_gejala = "SELECT * FROM tb_gejala WHERE kode_gejala IN ('" . implode("','", $kode_gejala) . "')";
        $result_gejala = $this->db->prepare($query_gejala);
        $result_gejala->execute();
        $gejala = $result_gejala->fetchAll(PDO::FETCH_ASSOC);

        $query_penyakit = "SELECT * FROM tb_penyakit WHERE kode_penyakit = '$kode_penyakit'";
        $result_penyakit = $this->db->prepare($query_penyakit);
        $result_penyakit->execute();
        $row = $result_penyakit->fetch(PDO::FETCH_ASSOC);

        // insert ke tb_diagnosa
        if(isset($_SESSION['username'])) :
            $nama = $_SESSION['username'];
            $query_diagnosa = "INSERT INTO tb_diagnosa (username, penyakit) VALUES ('$nama', '$kode_penyakit')";
            $result_diagnosa = $this->db->prepare($query_diagnosa);
            $result_diagnosa->execute();
        endif;
        $_SESSION['gejala'] = $kode_gejala;
        $_SESSION['penyakit'] = $kode_penyakit;
    ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Hasil Diagnosa</h3>
                <a href="../view/diagnosis_cetak.php" class="btn btn-primary" id="btn-cetak">Cetak</a>
                <!-- <button class="btn btn-primary" id="btn-cetak" onclick="cetakHasil()">Cetak</button> -->
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Gejala yang dipilih :</h4>
                        <ul>
                            <?php foreach ($gejala as $g) : ?>
                            <li><?= $g['nama_gejala'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Kode Penyakit</label>
                            <input type="text" class="form-control" value="<?= $row['kode_penyakit'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Nama Penyakit</label>
                            <input type="text" class="form-control" value="<?= $row['nama_penyakit'] ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Solusi</label>
                            <textarea class="form-control" rows="6" readonly><?= $row['solusi'] ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Penyebab</label>
                            <textarea class="form-control" rows="6" readonly><?= $row['penyebab'] ?></textarea>
                        </div>
                    </div>
                    <!-- 
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label>Keterangan Penyakit</label>
                            <textarea class="form-control" rows="6" readonly><?= $row['pengertian'] ?></textarea>
                        </div>
                    </div> -->



                </div>
                <div class="col-md-12 mt-3">
                    <a href="../view/diagnosis.php" class="btn btn-warning text-white" id="btn-back">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    }

    public function tampilPenyakit()
    {
        $query = "SELECT * FROM tb_penyakit";
        $penyakit = $this->db->prepare($query);
        $penyakit->execute();
        $dataPenyakit = $penyakit->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_GET['proses'])) :
            $kode_penyakit = $_GET['penyakit'];
            $this->tampilgejala($kode_penyakit);
        else :
        ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pilih Penyakit</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="GET">
                            <div class="form-group">
                                <label>Penyakit</label>
                                <select class="w-100 form-control" name="penyakit" id="penyakit" required>
                                    <option value="">Pilih Penyakit</option>
                                    <?php foreach ($dataPenyakit as $penyakit) : ?>
                                    <option value="<?= $penyakit['kode_penyakit'] ?>">
                                        <?= "{$penyakit['nama_penyakit']}" ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="proses">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        endif;
    }

    public function cetakDiagnosis($gejala, $penyakit)
    {
        $query_gejala = "SELECT * FROM tb_gejala WHERE kode_gejala IN ('" . implode("','", $gejala) . "')";
        $query_penyakit = "SELECT * FROM tb_penyakit WHERE kode_penyakit = '$penyakit'";
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(200, 10, 'HASIL DIAGNOSA', 0, 1, 'C');


        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 5, '', 0, 1);
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(45, 10, 'Gejala yang dipilih :', 0, 1, 'L');
        $result_gejala = $this->db->prepare($query_gejala);
        $result_gejala->execute();
        $gejala = $result_gejala->fetchAll(PDO::FETCH_ASSOC);
        foreach ($gejala as $key => $row) {
            $pdf->SetFont('Times', '', 12);
            $pdf->Cell(170, 10, ($key + 1) . ". {$row['nama_gejala']}", 0, 1, 'L');
        }

        $pdf->Cell(10, 5, '', 0, 1);
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(45, 10, 'Penyakit :', 0, 1, 'L');
        $result_penyakit = $this->db->prepare($query_penyakit);
        $result_penyakit->execute();
        $penyakit = $result_penyakit->fetch(PDO::FETCH_ASSOC);
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(170, 10, "Kode Penyakit : {$penyakit['kode_penyakit']}", 0, 1, 'L');
        $pdf->Cell(170, 10, "Nama Penyakit : {$penyakit['nama_penyakit']}", 0, 1, 'L');
        $pdf->MultiCell(180, 10, "{$penyakit['keterangan_penyakit']}", 0);
        $pdf->Cell(180, 10, "Solusi :", 0, 1, 'L');
        $pdf->MultiCell(180, 10, "{$penyakit['solusi']}", 0);
        $pdf->Cell(180, 10, "Penyebab :", 0, 1, 'L');
        $pdf->MultiCell(180, 10, "{$penyakit['penyebab']}", 0);

        $pdf->Output();
    }
}

$diagnosis = new diagnosis($con);