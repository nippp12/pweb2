<?php
include '../classes/database.php';
$db=new database;
?>
<form action="proses_pasien.php?aksi=tambah" method="post">
<table>
    <tr>
        <td>no rm</td>
        <td><input type="text" name="no_rm"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama_pasien"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
        <td>tanggal lahir</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="simpan">
        </td>
    </tr>
</table>
</form>