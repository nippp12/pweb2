<?php
//membuat classs mahasiswa
class mahasiswa{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    //method untuk menampilkan nama
    protected function tampil_nim(){
        echo "220202011 <br>";
    }
    function __construct(){
        echo "Saya Mahasiswa Teknik Informatika <br>";
    }
    function tampil_nama(){
        echo "nama saya hanif";
    }
    function tampil_mahasiswa(){
        echo "<br>Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }
    function tampil_alamat(){
        //menampilkan nama
    }
    function __destruct(){
        echo "</br>Politeknik Negeri Cilacap";
        $this->tampil_nim();
    }
}

$nama_mahasiswa= new mahasiswa();
echo $nama_mahasiswa ->tampil_nama();
echo $nama_mahasiswa ->tampil_mahasiswa();