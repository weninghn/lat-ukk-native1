<?php 

include '../koneksi.php';

$id_petugas = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$edit = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas = '$nama', username = '$username', password = '$password', telp = '$telp', level = '$level' WHERE petugas.id_petugas = $id_petugas");

if ($edit) {
    header("location:../admin/user.php");
} else {
    header("location:../admin/edit_user.php?pesan=gagal");
}

?>