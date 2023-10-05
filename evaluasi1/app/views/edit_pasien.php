<?php
include "../classes/database.php";
$db=new database;
?>
<h3>Edit data pasien</h3>
<form action="proses_pasien.php?aksi=update" method="post">
    <?php
        foreach($db->edit_pasien($_GET['id']) as $d){
    ?>
        <table>
            <tr>
                <td>no_rm</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']?>">
                    <input type="text" name="no_rm" value="<?php echo $d['no_rm']?>">
                </td>
            </tr>
            <tr>
                <td>nama pasien</td>
                <td>
                    <input type="text" name="nama_pasien" value="<?php echo $d['nama_pasien']?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
            </tr>
            <tr>
                <td>tanggal_lahir</td>
                <td>
                <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']?>">
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="simpan">
                </td>
            </tr>
        </table>
        <?php
        }
        ?>
</form>