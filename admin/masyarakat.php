<?php 
include '../admin/sidebar.php';
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Data Masyarakat</title>
</head>
<body>
    <div class="mt-4" style="margin-left: 3%;">
        <h3>Data Masyarakat</h3>
        <button class="btn btn-default"><a href="../admin/laporan_masyarakat.php">Cetak Data Masyarakat</a></button><br/><br/>
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Password</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM masyarakat");
                while($data = mysqli_fetch_assoc($query))
                {
                    $nik = $data['nik'];
                    $nama = $data['nama'];
                    $user = $data['username'];
                    $telp = $data['telp'];
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $nik ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $user ?></td>
                    <td><?= $telp ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>