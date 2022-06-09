<?php

require_once 'koneksi.php';

//pengguna
class pengguna extends koneksi {

    //Tambah Pengguna
    public function Tambahpengguna($nama, $username, $password, $hak_akses){
        try{
            $tambahpengguna = $this->db->prepare("INSERT INTO tb_login (nama, username, `password`, hak_akses) VALUES(:nama,:username,:password,:hak_akses)");
            $tambahpengguna->bindParam(":nama",$nama);
            $tambahpengguna->bindParam(":username",$username);
    
            $tambahpengguna->bindParam(":password",$password);
            $tambahpengguna->bindParam(":hak_akses",$hak_akses);
            session_start();
            if ($tambahpengguna->execute()){
                if(isset($_SESSION['hak_akses']) == "admin"){
                    ?>
<script>
Swal.fire({

    icon: 'success',
    title: 'Data Berhasil Disimpan',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "pengguna.php";
});
</script>
<?php
            }else{
            ?>
<script>
Swal.fire({

    icon: 'success',
    title: 'Registrasi Berhasil',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "../../../login/login.php";
});
</script>
<?php
                }
            }

            return true;

        }
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    
    //Edit Pengguna
    public function TampilPengguna ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            ?>
<tr>
    <td><?php echo "{$row['nama']}"; ?></td>
    <td><?php echo "{$row['username']}"; ?></td>



    <td><?php echo "{$row['password']}"; ?></td>
    <td><?php echo "{$row['hak_akses']}"; ?></td>

    <td>
        <center>
            <a href="pengguna_edit.php?id=<?php echo $row['username'] ?>" class='btn btn-warning'><span
                    class='bi bi-pen'></span>Edit</a>
            <a class="del_pengguna btn btn-danger" id="<?php echo "{$row['username']}" ?>">Hapus</a>
        </center>
    </td>
</tr>
<?php
        }
    }

    
    //Edit Pengguna
    public function Editpengguna($nama, $username, $password, $hak_akses){

        try{
            $data = [
                'nama'=>$nama,
                'username'=>$username,
                'password'=>$password,
                'hak_akses'=>$hak_akses,
            ];

            $editpengguna = $this->db->prepare("UPDATE tb_login SET nama=:nama,username=:username,password=:password,hak_akses=:hak_akses WHERE username=:username");

            if($editpengguna->execute($data)){
                echo "<script>windows.location.href='class_pengguna.php?update=update';</script>";
                return true;
            }else{
                echo "<script>windows.location.href='pengguna_edit.php?updates=gagal';</script>";
                return false;
            }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }
    
    
      //Tampil Hitung Pengguna Pada Halaman Admin
    public function Tampilcards($total){
        $query="SELECT COUNT(*) AS total FROM $total";
        $card = $this->db->prepare($query);
        $card->execute();
    
        while($row=$card->fetch(PDO::FETCH_ASSOC)){
            $count=$row['total'];
            return $count;
        }
    }

    //Hapus
    public function hapuspengguna($id){
        $hapuspengguna = $this->db->prepare("DELETE FROM tb_login where username='{$id}'");
        $hapuspengguna->execute();
        return true;
    }

}

$pengguna = new pengguna($con);

    if(isset($_POST['hapus'])){
        $hapus = $_POST['hapus'];
        var_dump($hapus);
        $pengguna->hapuspengguna($hapus);
    }