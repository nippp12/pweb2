<?php
class database{
    var $host="localhost";
    var $user="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi=mysqli_connect($this->host,$this->user,$this->password,$this->db);
    }
    function tampil_karyawan(){
        $data=mysqli_query($this->koneksi,"select * from karyawan");
        while($d= mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tambah_karyawan($id_karyawan,$nama,$alamat){
        $data=mysqli_query($this->koneksi,"insert into(id_karyawan,nama,alamat) values ('$id_karyawan','$nama','$alamat')");
    }
    function edit_karyawan($id){
        $data=mysqli_query($this->koneksi,"select * from karyawan where id='$id'");
        while($d= mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id,$id_karyawan,$nama,$alamat){
        mysqli_query($this->koneksi,"update karyawan set id='$id_karyawan', nama='$nama', alamat='$alamat' where id='$id'");
    }
    function delete($id){
        mysqli_query($this->koneksi,"delete from karyawan where id='$id'");
    }
}