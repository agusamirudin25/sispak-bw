<?php

require_once 'koneksi.php';

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
                <td><?= "{$row['tanggal']}"; ?></td>
            </tr>
        <?php endwhile;
    }


}

$laporan = new laporan($con);