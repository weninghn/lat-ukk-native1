<?php 
include '../petugas/navbar.php';
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Data Tanggapan</title>
</head>
<body>
    <div class="mt-4" style="margin-left:3%">
        <h3>Data Pengaduan Yang Sudah Ditanggapi</h3><br/>
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>ID Pengaduan</td>
                    <td>Tanggal Pengaduan</td>
                    <td>Tanggapan</td>
                    <td>ID Petugas</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM tanggapan");
                while ($data = mysqli_fetch_assoc($query)) 
                {
                    $id_pengaduan = $data['id_pengaduan'];
                    $tgl_tanggapan = $data['tgl_tanggapan'];
                    $tanggapan = $data['tanggapan'];
                    $id_petugas = $data['id_petugas'];
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $id_pengaduan ?></td>
                    <td><?= $tgl_tanggapan ?></td>
                    <td><?= $tanggapan ?></td>
                    <td><?= $id_petugas ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>