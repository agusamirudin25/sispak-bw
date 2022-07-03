<?php

require_once 'koneksi.php';

//class gejala
class gejala extends koneksi {


    //Tambah Gejala
    public function Insertgejala ($kode_gejala, $nama_gejala){
        try{
            $insertgejala = $this->db->prepare("INSERT INTO tb_gejala (kode_gejala,nama_gejala) VALUES(:kode_gejala,:nama_gejala)");

            $insertgejala->bindParam(":kode_gejala",$kode_gejala);
            $insertgejala->bindParam(":nama_gejala",$nama_gejala);
          
         
            if ($insertgejala->execute()){
                ?>
<script>
Swal.fire({

        icon: 'success',
        title: 'Data Berhasil Disimpan',
        showConfirmButton: false,
        timer: 1500
    })
    .then((result) => {
        location.href = "../view/tb_gejala.php";
    });
</script>
<?php
            }
            return true;
}
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //Tampil Gejala
    public function Tampilgejala ($query, $user = 'admin'){
        $query = $this->db->prepare($query);
        $query->execute();
   
    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
     ?>

<tr>
    <td><?php echo "{$row['kode_gejala']}"; ?></td>
    <td><?php echo "{$row['nama_gejala']}"; ?></td>
    <td><?php echo $row['nama'] == NULL ? '<span class="badge badge-warning text-white">Belum Verfiikasi</span>' : '<span class="badge badge-success text-white">Terverifikasi <br> ('. $row['nama'] .')</span>' ?></td>


    <td>
        <?php if($user == 'admin') : ?>
        <center>
            <a href="tb_gejala_edit.php?id=<?php echo $row['kode_gejala'] ?>" class='btn btn-warning'><span
                    class='bi bi-pen'></span>Edit</a>
            <a class="hapus_gejala btn btn-danger" id="<?php echo $row['kode_gejala'] ?>">Hapus</a>
        </center>
        <?php else : ?>
            <?php if($row['nama'] == null) : ?>
            <center>
                <a class="verif_gejala btn btn-primary" id="<?php echo $row['kode_gejala'] ?>">Verifikasi</a>
            </center>
            <?php endif; ?>
        <?php endif; ?>
    </td>
</tr>

<?php
   }
}


    //Edit Gejala
    public function Editgejala($kode_gejala,$nama_gejala){

    try{
        $data = [
            'kode_gejala'=>$kode_gejala,
            'nama_gejala'=>$nama_gejala,
        ];

        $editgejala = $this->db->prepare("UPDATE tb_gejala SET nama_gejala=:nama_gejala WHERE kode_gejala=:kode_gejala");
        if($editgejala->execute($data)){
            echo "<script>windows.location.href='../view/tb_gejala.php?updates=update';</script>";
            return true;
        } else{
            echo "<script>windows.location.href='../view/tb_gejala_edit.php?updates=gagal';</script>";
            return false;
        }
    }

    catch (PDOException $e)
    {
        echo $e->getMessage();
        return false;
    }
}


    //Tampil Hitung Gejala Pada Halaman Admin
    public function Tampilcard($total){
        $query="SELECT COUNT(*) AS total FROM $total";
        $card = $this->db->prepare($query);
        $card->execute();

    while($row=$card->fetch(PDO::FETCH_ASSOC)){
        $count=$row['total'];
        return $count;
    }
}


    //Hapus Gejala
    public function hapusgejala($id){
        $hapusgejala = $this->db->prepare("DELETE FROM tb_gejala where kode_gejala = '{$id}'");
        $hapusgejala->execute();
        return true;
    }

    public function verifikasigejala($id)
    {
        session_start();
        $verifikasigejala = $this->db->prepare("UPDATE tb_gejala SET verifikasi=:username WHERE kode_gejala=:kode_gejala");
        $verifikasigejala->bindParam(":username", $_SESSION['username']);
        $verifikasigejala->bindParam(":kode_gejala", $id);
        $verifikasigejala->execute();
        return true;
    }
}

$gejala = new gejala($con);

    if(isset($_POST['id_hapus'])){
        $id_hapus = $_POST['id_hapus'];
        $gejala->hapusgejala($id_hapus);
    }
    // verifikasi gejala oleh pakar
    if(isset($_POST['id_verifikasi'])){
        $id_hapus = $_POST['id_verifikasi'];
        $gejala->verifikasigejala($id_hapus);
    }
