<?php
// Membuat class dosen
class Dosen {
    // Menyimpan property
    var $nidn = "hanif";
    var $prodi;
    
    // Method untuk menampilkan NIDN
    function tampil_nidn() {
        return "NIDN saya adalah " . $this->nidn;
    }
    
    // Method untuk menampilkan prodi
    function tampil_prodi() {
        return "Prodi saya adalah " . $this->prodi;
    }
    
    // Method untuk menampilkan alamat
    function tampil_alamat() {
        // Menampilkan alamat
    }
}

// Membuat objek dosen
$nama_dosen = new Dosen();

// Memberikan nilai ke properti prodi
$nama_dosen->prodi = "Informatika"; 

// Menampilkan NIDN dan Prodi
echo $nama_dosen->tampil_nidn();
echo "<br>";
echo $nama_dosen->tampil_prodi();
?>
