<?php
include "../classes/database.php";
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mahasiswa($_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_mahasiswa.php");
}elseif($aksi=="update"){
    $db->update($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_mahasiswa.php?id=$id&aksi=edit&success=true");
}elseif($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_mahasiswa.php");
}