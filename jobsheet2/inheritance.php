<?php
class manusia{
    public $nama_saya;
    public $alamat_mahasiswa=" kroya";
    function panggil_nama($saya){
        $this->nama_saya=$saya;
    }
    protected function panggil_alamat(){
        echo "Alamat saya " . $this->alamat_mahasiswa;
    }
}
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    private $jenis="laki-laki";
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa=$mahasiswa;
    }
    function panggil_jenis(){
        return "Jenis kelamin " . $this->jenis;
    }
    public function intro(){
        $this->panggil_alamat();
    }
}
$informatika=new mahasiswa();
$informatika->panggil_nama("hanif");
$informatika->panggil_mahasiswa("maulana");

echo "Nama depan saya " . $informatika->nama_saya . "<br>";
echo "Nama belakang saya " . $informatika->nama_mahasiswa . "<br>";
echo  $informatika->panggil_jenis() . "<br>";
echo  $informatika->intro() . "<br>";

