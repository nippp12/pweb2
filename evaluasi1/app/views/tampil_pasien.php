<?php
include '../classes/database.php';
$db=new database;
?>
<a href="tambah_pasien.php">tambah</a>
<h3>Data Pasien</h3>
<table border="1">
    <tr>
        <th>no</th>
        <th>no rm</th>
        <th>nama</th>
        <th>tanggal lahir</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_pasien() as $x){
        ?>
        <tr>
        <th><?php echo $no++ ?></th>
        <th><?php echo $x['no_rm'] ?></th>
        <th><?php echo $x['nama_pasien'] ?></th>
        <th><?php echo $x['alamat'] ?></th>
        <th><?php echo $x['tanggal_lahir'] ?></th>
        <th>
            <a href="edit_pasien.php?id=<?php echo $x['id'] ?>&aksi=edit">edit</a>
            <a href="proses_pasien.php?id=<?php echo $x['id'] ?>&aksi=hapus">hapus</a>
        </th>
    </tr>
    <?php
    }
    ?>
</table>