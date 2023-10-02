<?php
//membuat classs mahasiswa
class mahasiswa{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    //method untuk menampilkan nama
    function tampil_nim(){
        //menampilkan nama
    }
    function tampil_nama(){
        echo "nama saya hanip";
    }
    function tampil_alamat(){
        //menampilkan nama
    }
}

$nama_mahasiswa= new mahasiswa();
echo $nama_mahasiswa ->tampil_nama();