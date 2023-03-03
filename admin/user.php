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
    <title>Data User</title>
</head>
<body>
    <div class="mt-4" style="margin-left: 3%;">
        <h3>Data User</h3>
        <button class="btn btn-default"><a href="../admin/tambah_user.php">[+] Tambah Data</a></button><br/><br/>
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama User</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>No. Telp</td>
                    <td>Level</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM petugas");
                while($data = mysqli_fetch_assoc($query)){
                    $id_petugas = $data['id_petugas'];
                    $nama = $data['nama_petugas'];
                    $username = $data['username'];
                    $pass = $data['password'];
                    $telp = $data['telp'];
                    $level = $data['level'];
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $username ?></td>
                    <td><?= $pass ?></td>
                    <td><?= $telp ?></td>
                    <td><?= $level ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id_petugas" id="" value="<?= $id_petugas ?>">
                            <a href="../admin/edit_user.php?id_petugas=<?= $id_petugas ?>">Edit</a>
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