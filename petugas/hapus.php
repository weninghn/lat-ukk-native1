<?php

include '../koneksi.php';

$id_pengaduan = $_GET['id_pengaduan'];
$hapus = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'");

if ($hapus) {
    header("location:../petugas/index.php?pesan=berhasil");
} else {
    header("location:../petugas/index.php?pesan=gagal");
}

// if (isset($_POST['hapus'])){
//     $id_pengaduan = $_POST['id_pengaduan'];
//     $hapus = mysqli_query($koneksi, "Delete from produk where id_pengaduan = '$id_pengaduan'");
//     if($hapus){
//         header("location:../petugas/index.php?hapus=berhasil");
//         }else{  
//             header("location:../petugas/index.php?hapus=gagal");
//     }
// }

?>