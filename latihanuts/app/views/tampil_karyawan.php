<?php
include '../classes/database.php';
$db=new database;
?>
<h3>Data Karyawan</h3>
<a href="tambah_karyawan.php">Tambah Karyawan</a>
<br>
<table border='1'>
    <tr>
        <th>no</th>
        <th>id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_karyawan() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['id_karyawan'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a href="edit_karyawan.php">edit</a>
                <a href="tampil_karyawan.php">tampil</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
