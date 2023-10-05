<?php

class HomeController{
    public function home(){
        header('location:http://localhost/jobsheet5/index.php');
    }
    public function mahasiswa(){
        header('location:http://localhost/jobsheet5/views/mahasiswa/index.php');
    }
    public function tambah(){
        header('location:http://localhost/jobsheet5/views/mahasiswa/tambah.php');
    }

    public function edit($id) {
        header("location: http://localhost/jobsheet5/views/mahasiswa/edit.php?id={$id}");
    }

    public function hapus($id) {
        header("location: http://localhost/jobsheet5/views/mahasiswa/hapus.php?id={$id}");
    }

}