<?php
$user = "root";
$pass = "";
try {
    $koneksi = new PDO("mysql:host=localhost;dbname=ukk_wening;", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "koneksi gagal";
    die();
}
session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data[]=$username;
        $data[]=$password;

        $sql = "SELECT * FROM masyarakat WHERE username = ?";
        $row = $koneksi->prepare($sql);
        $row->execute([$username]);

        $cek = $row->rowCount();
        if ($cek > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:masyarakat/index.php");
        } else {
             header("location:index.php?pesan=gagal");
        }
?>
