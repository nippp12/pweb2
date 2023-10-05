<?php
include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    private $model;

    public function __construct($db){
        $this->model=new Mahasiswa($db);
    }
    function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }
    function createMahasiswa($nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        return $this->model->createMahasiswa($nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
    }
    function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }
    function updateMahasiswa($id,$nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        return $this->model->updateMahasiswa($id,$nim,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
    }
    function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}