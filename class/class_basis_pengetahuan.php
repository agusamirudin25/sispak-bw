<?php

require_once 'koneksi.php';

//pengetahuan
class pengetahuan extends koneksi
{

    //Tambah pengetahuan
    public function Tambahpengetahuan($kode_gejala, $kode_penyakit)
    {
        try {
            // cek duplikasi
            $query_cek = "SELECT * FROM tb_pengetahuan WHERE kode_gejala = '$kode_gejala' AND kode_penyakit = '$kode_penyakit'";
            $result_cek = $this->db->prepare($query_cek);
            $result_cek->execute();
            $row_cek = $result_cek->fetch(PDO::FETCH_ASSOC);
            if ($row_cek) {
                echo "
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Gagal disimpan. Gejala dan penyakit sudah ada di sistem',
                        showConfirmButton: true,
                        timer: 1500
                    }).then((result) => {
                        location.href = 'basis_pengetahuan.php'
                    });
                </script>
                ";
                return false;
            } else {
                $tambahpengetahuan = $this->db->prepare("INSERT INTO tb_pengetahuan (kode_gejala, kode_penyakit) VALUES(:kode_gejala, :kode_penyakit)");
                $tambahpengetahuan->bindParam(":kode_gejala", $kode_gejala);
                $tambahpengetahuan->bindParam(":kode_penyakit", $kode_penyakit);
    
                if ($tambahpengetahuan->execute()) {
                    echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Disimpan',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            location.href = 'basis_pengetahuan.php'
                        });
                    </script>
                    ";
                }
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //Edit pengetahuan
    public function Tampilpengetahuan($query)
    {
        $query = $this->db->prepare($query);
        $query->execute();
        // var_dump($query);
        // die;

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= "{$row['nama_gejala']} ({$row['kode_gejala']})"; ?></td>
                <td><?= "{$row['nama_penyakit']} ({$row['kode_penyakit']})"; ?></td>
                <td>
                    <center>
                        <a href="basis_pengetahuan_edit.php?id=<?= $row['id'] ?>" class='btn btn-warning'><span class='bi bi-pen'></span>Edit</a>
                        <a class="del_pengetahuan btn btn-danger" id="<?= "{$row['id']}" ?>">Hapus</a>
                    </center>
                </td>
            </tr>
        <?php endwhile;
    }


    //Edit pengetahuan
    public function Editpengetahuan($id, $kode_gejala, $kode_penyakit)
    {
        try {
            $editpengetahuan = $this->db->prepare("UPDATE tb_pengetahuan SET kode_gejala=:kode_gejala, kode_penyakit=:kode_penyakit WHERE id=:id");
            $editpengetahuan->bindParam(":id", $id);
            $editpengetahuan->bindParam(":kode_gejala", $kode_gejala);
            $editpengetahuan->bindParam(":kode_penyakit", $kode_penyakit);

            if ($editpengetahuan->execute()) {
                echo "
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil Disimpan',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        location.href = 'basis_pengetahuan.php'
                    });
                </script>
                ";
            }
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //Hapus pengetahuan
    public function hapuspengetahuan($id)
    {
        $hapuspengetahuan = $this->db->prepare("DELETE FROM tb_pengetahuan where id='$id'");
        $hapuspengetahuan->execute();
        return true;
    }
}

$pengetahuan = new pengetahuan($con);

if (isset($_POST['hapus'])) {
    $hapus = $_POST['hapus'];
    $pengetahuan->hapuspengetahuan($hapus);
}
