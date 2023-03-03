<?php 

include '../koneksi.php';

$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];
// $status = $_POST['status'];

mysqli_query($koneksi, "INSERT INTO pengaduan VALUES('', '$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')");

header("location:../masyarakat/index.php");
?>