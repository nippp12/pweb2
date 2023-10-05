<?php
//membuat class mahasiswa
class mahasiswa{
    // property public
    public $nama;
    // property protected
    private $nim="220202011";
    //public method
    public function tampilkan_nama(){
        // nilai kembalian nama
        return "Nama saya Hanif<br>";
    }
    //private method
    function tampilkan_nim(){
        // nilai kembalian nama
        return "Nim saya " . $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam objek $mahasiswa
$mahasiswa= new mahasiswa();
//memanggil method tampilkan nama
echo $mahasiswa -> tampilkan_nama();
echo $mahasiswa -> tampilkan_nim();

