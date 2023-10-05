<?php
include '../classes/database.php';
$db=new database;
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIAKAD</title>
  </head>
<div class="px-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
// Periksa apakah parameter 'success' ada dalam URL
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    // Tampilkan alert jika parameter 'success' ada
    echo '<div id="successAlert" class="alert alert-success" role="alert">Update berhasil!</div>';
}
?>
<h2>Data Mahasiswa<h2>
<a class="btn btn-primary mb-2 bt-2" href="input_mahasiswa.php">Tambah Mahasiswa</a>
<table class="table">
    <tr>
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa()as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim']   ?></td>
            <td><?php echo $x['nama']  ?></td>
            <td><?php echo $x['alamat']?></td>
            <td>
                <a class="btn btn-warning" href="edit_mahasiswa.php?id=<?php echo $x['id']; ?>&aksi=edit">edit</a>
                <a class="btn btn-danger" href="proses_mahasiswa.php?id=<?php echo $x['id']; ?>&aksi=hapus">hapus</a>
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