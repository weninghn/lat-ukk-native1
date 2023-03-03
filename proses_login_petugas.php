<?php 

//mengaktifkan session
session_start();

//menghubungkan database
include 'koneksi.php';

//mengambil data yang dikirim
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data
$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");

//menghitung jumlah data
$cek = mysqli_num_rows($login);

//cek data pada database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    //jika sebagai admin
    if ($data['level'] == "admin") 
    {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id_petugas'];
        $_SESSION['level'] = "admin";

        //halaman dialihkan ke
        header("location:admin/index.php");

    //jika sebagai petugas
    } else if($data['level'] == "petugas")
    {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id_petugas'];
        $_SESSION['level'] = "petugas";

        //halaman dialihkan ke
        header("location:petugas/index.php");
        
    } else 
    {
        header("location:index.php?pesan=gagal");
    }
}

?>