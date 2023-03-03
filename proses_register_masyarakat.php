<?php

include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

mysqli_query($koneksi, "INSERT INTO masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telp')");

header("location:index.php");

?>