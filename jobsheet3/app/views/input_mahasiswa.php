<h3>Tambah Data Mahasiwa</h3>
<form action="proses_mahasiswa.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>