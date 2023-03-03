<?php 

include '../koneksi.php';

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO petugas VALUES('', '$nama_petugas', '$username', '$password', '$telp', '$level')");

header("location:../admin/user.php");

?>