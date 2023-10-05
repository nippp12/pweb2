<?php
class pasien{
    //a. membuat class pasien dengan properti di bawah ini
    private $no_rm=1;
    var $nama_pasien="";
    var $alamat="kroya";
    var $tanggal_lahir=1;

    function __construct(){
        //b. instansiasi constructor untuk menginisialisasi atribut di bawah ini
        $this->no_rm=26;
        $this->nama_pasien="Hanif Maulana";
        $this->alamat="jl gatsu";
        $this->tanggal_lahir="12 Desember 2003";
    }
    function tampilkan_pasien(){
        //c. menampilkan pasien dengan metode
        $infopasien= $this->no_rm . "<br>" . $this->nama_pasien . "<br>" . $this->alamat . "<br>" . $this->tanggal_lahir;
        return $infopasien;
    }
    public function warisan(){
        //memanggil no_rm yang private agar bisa di panggil dari luar
        $cek = "<br>" . $this->no_rm=26 ;
        return $cek;
    }
}
class seseorang extends pasien{
    var $umur=1;
    function anak(){
        $this->umur=15 . "<br>" . $this->warisan();
    }
}
$nana= new seseorang;
echo $nana->anak();
$orang = new pasien;
echo $orang->tampilkan_pasien();
//memanggil dengan metode
echo $orang->warisan();
