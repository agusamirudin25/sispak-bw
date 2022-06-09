<?php

require_once 'koneksi.php';

//class penyakit
class penyakit extends koneksi
{

    //Tambah Penyakit
    public function Insertpenyakit($kode_penyakit, $nama_penyakit, $solusi, $keterangan_penyakit)
    {
        try {
            $insertpenyakit = $this->db->prepare("INSERT INTO tb_penyakit(kode_penyakit,nama_penyakit,solusi, keterangan_penyakit) VALUES(:kode_penyakit,:nama_penyakit,:solusi, :keterangan_penyakit)");

            $insertpenyakit->bindParam(":kode_penyakit", $kode_penyakit);
            $insertpenyakit->bindParam(":nama_penyakit", $nama_penyakit);
            $insertpenyakit->bindParam(":keterangan_penyakit", $keterangan_penyakit);
            $insertpenyakit->bindParam(":solusi", $solusi);

            if ($insertpenyakit->execute()) {
?>
<script>
Swal.fire({

    icon: 'success',
    title: 'Data Berhasil Disimpan',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "../view/tb_penyakit.php";
});
</script>
<?php
            }
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //Tampil Penyakit
    public function Tampilpenyakit($query)
    {
        $query = $this->db->prepare($query);
        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>

<tr>
    <td><?php echo "{$row['kode_penyakit']}"; ?></td>
    <td><?php echo "{$row['nama_penyakit']}"; ?></td>
    <td>
        <textarea class="form-control" cols="50" rows="7" readonly
            style="text-align: justify;"><?php echo "{$row['keterangan_penyakit']}"; ?></textarea>

    </td>
    <td><textarea class="form-control" cols="50" readonly rows="7"><?php echo "{$row['solusi']}"; ?></textarea></td>
    <td>
        <center>
            <a href="../view/tb_penyakit_edit.php?id=<?php echo $row['kode_penyakit'] ?>" class='btn btn-warning'><span
                    class='bi bi-pen'></span>Edit</a>
            <a class="hapus_penyakit btn btn-danger" id="<?php echo $row['kode_penyakit'] ?>">Hapus</a>
        </center>
    </td>
</tr>

<?php
        }
    }


    //Edit Penyakit
    public function Editpenyakit($kode_penyakit, $nama_penyakit, $solusi, $keterangan_penyakit)
    {

        try {
            $data = [
                'kode_penyakit' => $kode_penyakit,
                'nama_penyakit' => $nama_penyakit,
                'solusi' => $solusi,
                'keterangan_penyakit' => $keterangan_penyakit
            ];

            $editpenyakit = $this->db->prepare("UPDATE tb_penyakit SET nama_penyakit=:nama_penyakit,solusi=:solusi,keterangan_penyakit=:keterangan_penyakit WHERE kode_penyakit = :kode_penyakit");
            if ($editpenyakit->execute($data)) {
                echo "<script>windows.location.href='../view/tb_penyakit.php?updates=update';</script>";
                return true;
            } else {
                echo "<script>windows.location.href='../view/tb_penyakit_edit.php?updates=gagal';</script>";
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //Tampil Hitung Penyakit Pada Halaman Admin
    public function tampilkartu($total)
    {
        $query = "SELECT COUNT(*) AS total FROM $total";
        $card = $this->db->prepare($query);
        $card->execute();

        while ($row = $card->fetch(PDO::FETCH_ASSOC)) {
            $count = $row['total'];
            return $count;
        }
    }


    //Hapus Penyakit
    public function hapuspenyakit($id)
    {
        $hapuspenyakit = $this->db->prepare("DELETE FROM tb_penyakit where kode_penyakit='$id'");
        $hapuspenyakit->execute();
        return true;
    }
}

$penyakit = new penyakit($con);

if (isset($_POST['id_hapus_penyakit'])) {
    $id_hapus_penyakit = $_POST['id_hapus_penyakit'];
    $penyakit->hapuspenyakit($id_hapus_penyakit);
}