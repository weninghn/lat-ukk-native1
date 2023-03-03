<?php 
include '../koneksi.php';
include '../admin/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Dashboard | Petugas</title>
</head>
<body>
    <div class="mt-4" style="margin-left:3%">
        <h2>Data Pengaduan Masyarakat</h2>
        <button class="btn btn-default"><a href="../admin/laporan.php">Cetak Data Pengaduan Masyarakat</a></button><br/><br/>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Isi Pengaduan</th>
                    <th scope="col">ID Pengaduan</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Tanggal Pengaduan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM pengaduan");
                $no = 1;
                $jumlah = mysqli_num_rows($query);
                while ($data = mysqli_fetch_assoc($query)) {
                    $foto = $data['foto'];
                    $isi_laporan = $data['isi_laporan'];
                    $id_pengaduan = $data['id_pengaduan'];
                    $nik = $data['nik'];
                    $tgl_pengaduan = $data['tgl_pengaduan'];
                    $status = $data['status'];
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <!-- <td><? $foto ?></td> -->
                    <td><?= "<img src='img/$foto' width='50' height='50'/>"; ?></td>
                    <td><?= $isi_laporan ?></td>
                    <td><?= $id_pengaduan ?></td>
                    <td><?= $nik ?></td>
                    <td><?= $tgl_pengaduan ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id_pengaduan" value="<?= $id_pengaduan ?>" id="">
                            <a href="../admin/tanggapan.php?id_pengaduan=<?= $id_pengaduan ?>">Tanggapan</a> | 
                            <a href="../admin/update.php?id_pengaduan=<?= $id_pengaduan ?>">Edit</a> | 
                            <a href="../petugas/hapus.php?id_pengaduan=?<?= $id_pengaduan ?>">Delete</a>
                        </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>