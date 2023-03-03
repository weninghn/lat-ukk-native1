<?php 
include '../koneksi.php';

$id_pengaduan = $_POST['id_pengaduan'];
// $tgl_pengaduan = $_POST['tgl_pengaduan'];
// $nik = $_POST['nik'];
// $isi_laporan = $_POST['isi_laporan'];
// $foto = $_POST['foto'];
$status = $_POST['status'];
// var_dump($status);
$edit = mysqli_query($koneksi, "UPDATE `pengaduan` SET `status` = '$status' WHERE `pengaduan`.`id_pengaduan` = '$id_pengaduan'");
if($edit){
header("location:../admin/index.php");
}?>