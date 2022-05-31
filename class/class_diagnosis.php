<?php

require_once 'koneksi.php';

class diagnosis extends koneksi
{

    public function tampilgejala()
    {

        if (isset($_POST['simpan'])) {
            if (isset($_POST['G1']) && isset($_POST['G2']) && isset($_POST['G3']) && isset($_POST['G4'])) {
                $kode_gejala = ['G1', 'G2', 'G3', 'G4'];
                $kode_penyakit = 'P1';
            } else if (isset($_POST['G1']) && isset($_POST['G5']) && isset($_POST['G6'])) {
                $kode_gejala = ['G1', 'G5', 'G6'];
                $kode_penyakit = 'P2';
            } else if (isset($_POST['G7']) && isset($_POST['G8']) && isset($_POST['G9']) && isset($_POST['G10'])) {
                $kode_gejala = ['G7', 'G8', 'G9', 'G10'];
                $kode_penyakit = 'P3';
            } else if (isset($_POST['G11']) && isset($_POST['12']) && isset($_POST['G13'])) {
                $kode_gejala = ['G11', 'G12', 'G13'];
                $kode_penyakit = 'P4';
            } else if (isset($_POST['G1']) && isset($_POST['G14']) && isset($_POST['G15'])) {
                $kode_gejala = ['G1', 'G14', 'G15'];
                $kode_penyakit = 'P5';
            } else if (isset($_POST['G16']) && isset($_POST['G17']) && isset($_POST['G18'])) {
                $kode_gejala = ['G16', 'G17', 'G18'];
                $kode_penyakit = 'P6';
            } else if (isset($_POST['G10']) && isset($_POST['G19']) && isset($_POST['G20'])) {
                $kode_gejala = ['G10', 'G19', 'G20'];
                $kode_penyakit = 'P7';
            } else if (isset($_POST['G21']) && isset($_POST['G22']) && isset($_POST['G23'])) {
                $kode_gejala = ['G21', 'G22', 'G23'];
                $kode_penyakit = 'P8';
            } else if (isset($_POST['G24']) && isset($_POST['G25']) && isset($_POST['G26'])) {
                $kode_gejala = ['G24', 'G25', 'G26'];
                $kode_penyakit = 'P9';
            } else if (isset($_POST['G27']) && isset($_POST['G28']) && isset($_POST['G29']) && isset($_POST['G30'])) {
                $kode_gejala = ['G27', 'G28', 'G29', 'G30'];
                $kode_penyakit = 'P10';
            } else if (isset($_POST['G31']) && isset($_POST['G32']) && isset($_POST['G33'])) {
                $kode_gejala = ['G31', 'G32', 'G33'];
                $kode_penyakit = 'P11';
            } else if (isset($_POST['G1']) && isset($_POST['G34']) && isset($_POST['G35']) && isset($_POST['G36']) && isset($_POST['G37'])) {
                $kode_gejala = ['G1', 'G34', 'G35', 'G36', 'G37'];
                $kode_penyakit = 'P12';
            } else if (isset($_POST['G27']) && isset($_POST['G38']) && isset($_POST['G39'])) {
                $kode_gejala = ['G27', 'G38', 'G39'];
                $kode_penyakit = 'P13';
            } else {
                echo "<script>
                alert('Penyakit tidak terdeteksi');
                window.history.back();
            </script>";
            return false;
            }
            $this->hasilDiagnosis($kode_gejala, $kode_penyakit);
        }
        ?>
        <form action="" method="post">
            <?php
            $query = "SELECT * FROM tb_gejala";
            $result = $this->db->prepare($query);
            $result->execute();
            ?>
            <div class="row">
                <?php
                if(count($_POST) == 0) :
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) :
                ?>
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                                <input type="checkbox" name="<?= $row['kode_gejala'] ?>" value="<?= $row['kode_gejala'] ?>" class="form-check-input">
                                <?= $row['nama_gejala'] ?>
                                <i class="input-helper"></i></label>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="col-md-12 mt-4">
                    <button type="submit" name="simpan" class="btn btn-primary">Diagnosa</button>
                </div>
                <?php endif; ?>
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
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Diagnosa</h3>
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
                            <div class="col-md-12 mt-3">
                                <a href="" class="btn btn-warning text-white">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

$diagnosis = new diagnosis($con);
