<?php

require_once 'koneksi.php';

//pengguna
class konsul extends koneksi {

    //Tambah Konsultasi
    public function Tambahkonsul($username, $pesan, $tujuan, $waktu){
        try{
            $tambahkonsul = $this->db->prepare("INSERT INTO tb_konsul (username, pesan, tujuan, waktu) VALUES(:username,:pesan,:tujuan,:waktu)");
            $tambahkonsul->bindParam(":username",$username);
            $tambahkonsul->bindParam(":pesan",$pesan);
            $tambahkonsul->bindParam(":tujuan",$tujuan);
            $tambahkonsul->bindParam(":waktu",$waktu);
            $tambahkonsul->execute();

            if($tujuan=='pakar'){
                ?>
<script>
Swal.fire({

    icon: 'success',
    title: 'Pesan Berhasil Terkirim',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "konsultasi.php";
});
</script>
<?php
        }else{
        ?>
<script>
Swal.fire({

    icon: 'success',
    title: 'Pesan Berhasil Terkirim',
    showConfirmButton: false,
    timer: 1500
}).then((result) => {
    location.href = "pakarkonsul.php?id=<?php echo $_GET['id'];?>";
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

    //Tampil Konsul
    public function Tampilkonsul ($query,$hak_akses){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            if($hak_akses == 'pakar'){
                if($row['tujuan'] == 'pakar'){
                    ?>
<li class="clearfix">
    <div class="message other-message float-left">
        <div class="message-data">
            <span class="message-data-time"><?php echo $row['waktu']; ?></span>
        </div>
        <div class="message my-message"><?php echo $row['pesan']; ?></div>
    </div>
</li>
<?php

            }else{
            ?>

<li class="clearfix">
    <div class="message other-message float-right">
        <div class="message-data">
            <span class="message-data-time"><?php echo $row['waktu']; ?></span>
        </div>
        <div class="message my-message"><?php echo $row['pesan']; ?></div>
    </div>
</li>
<?php

            }
            }else{
                if($row['tujuan'] == 'pakar'){
            ?>

<li class="clearfix">
    <div class="message other-message float-right">
        <div class="message-data">
            <span class="message-data-time"><?php echo $row['waktu']; ?></span>
        </div>
        <div class="message my-message"><?php echo $row['pesan']; ?></div>
    </div>
</li>
<?php

                }else{
                ?>

<li class="clearfix">
    <div class="message other-message float-left">
        <div class="message-data">
            <span class="message-data-time"><?php echo $row['waktu']; ?></span>
        </div>
        <div class="message my-message"><?php echo $row['pesan']; ?></div>
    </div>
</li>
<?php
                }
            }
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
    
    //Tampil Pakar
    public function Tampilpakar($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){
?>
<a href="../view/pakarkonsul.php?id=<?php echo $row['username'] ?>">
    <li class="clearfix">
        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
        <div class="about">
            <div class="name"><?php echo $row['nama']; ?></div>
        </div>
    </li>
</a>
<?php
        }     
    }
}

$konsul = new konsul($con);

   