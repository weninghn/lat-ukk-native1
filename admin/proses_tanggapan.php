<?php 

include '../koneksi.php';

$id_pengaduan = $_POST['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
// $tanggapan = $_POST['tanggapan'];
// $tgl_tanggapan = $_POST['tgl_tanggapan'];

mysqli_query($koneksi, "INSERT INTO tanggapan VALUES('', '$id_pengaduan', '$tgl_pengaduan', '$tanggapan', '$id_petugas')");

header("location:../admin/data_tanggapan.php");

?>