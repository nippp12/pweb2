<?php
include '../classes/databasedosen.php';
$db=new database;
?>
<h3>Data Dosen</h3>
<a href="input_dosen.php">Tambah Dosen</a>
<br>
<table border="1">
    <tr>
        <th>no</th>
        <th>nidn</th>
        <th>nama</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_dosen() as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td> 
            <td>
                <a href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit">edit</a>
                <a href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus">hapus</a>
            </td>
        </tr> 
    <?php   
    }
    ?>
</table>