<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';
//instansiasikan class database
$database=new database;
$db=$database->getKoneksi();
$mahasiswaController = new MahasiswaController($db);
$mahasiswa=$mahasiswaController->getAllMahasiswa();
?>

<?php
// Periksa apakah parameter 'success' ada dalam URL
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    // Tampilkan alert jika parameter 'success' ada
    echo '<div id="successAlert" class="alert alert-success" role="alert">Update berhasil!</div>';
}
?>
<h2>Data Mahasiswa<h2>
<a class="btn btn-primary mb-2 bt-2" href="tambah">Tambah Mahasiswa</a>
<table class="table">
    <tr>
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>tempat lahir</th>
        <th>tanggal lahir lahir</th>
        <th>jenis kelamin</th>
        <th>agama</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($mahasiswa as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim']   ?></td>
            <td><?php echo $x['nama']  ?></td>
            <td><?php echo $x['tempat_lahir']  ?></td>
            <td><?php echo $x['tanggal_lahir']  ?></td>
            <td><?php echo $x['jenis_kelamin']  ?></td>
            <td><?php echo $x['agama']  ?></td>
            <td><?php echo $x['alamat']  ?></td>
            <td>
                <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">edit</a>
                <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?')">hapus</a>
            </td>
        </tr>
<?php
}
?>
</table>
</div>
<script>
// Fungsi untuk menghilangkan alert setelah beberapa detik
function hideAlert() {
    var successAlert = document.getElementById('successAlert');
    if (successAlert) {
        successAlert.style.display = 'none';
    }
}

// Tampilkan alert
var successAlert = document.getElementById('successAlert');
if (successAlert) {
    successAlert.style.display = 'block';
    
    // Tunda penghilangan alert selama 2 detik (2000 milidetik)
    setTimeout(hideAlert, 2000); // Ubah angka 2000 sesuai dengan jumlah milidetik yang Anda inginkan
}
</script>