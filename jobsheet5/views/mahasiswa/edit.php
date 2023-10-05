<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData=$mahasiswaController->getMahasiswaById($id);

    if($mahasiswaData){
        if(isset($_POST['submit'])){
            $nim= $_POST['nim'];
            $nama= $_POST['nama'];  
            $tempat_lahir= $_POST['tempat_lahir']; 
            $tanggal_lahir= $_POST['tanggal_lahir'];
            $jenis_kelamin= $_POST['jenis_kelamin'];
            $agama= $_POST['agama'];
            $alamat= $_POST['alamat']; 

            $result=$mahasiswaController->updateMahasiswa($id,$nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
            if ($result) {
                // Jika berhasil, gunakan JavaScript untuk mengarahkan ke halaman "home"
                echo '<script>window.location.href = "home";</script>';
                exit();
            } else {
                echo "Gagal menyimpan perubahan.";
            }
            
        }
    }else{
        echo "mahasiswa tidak di temukan";
    }
}
?>
<h3>Edit Data Mahasiswa</h3>
<?php
if($mahasiswaData){
?>
    <form action="" method="post">
        <?php
        foreach($mahasiswaData as $d => $value){
        ?>
            <table border ="0">
                <tr>
                    <td width="100"> 
                        <?php 
                            echo $d; 
                        ?>
                    </td>
                    <td> 
                        <input type="text" name= "<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
            ?>
            <tr>
                <td></td>
                <td> 
                    <input type="submit" name="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>
