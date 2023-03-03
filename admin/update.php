<?php 
include '../admin/sidebar.php';
include '../koneksi.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Aduan | Masyarakat</title>
</head>
<body>
    <div class="container">
        <div class="card shadow mt-5">
            <div class="card-body">
                <h3>Edit Data Form Aduan</h3><br/>
                <?php 
                $id_pengaduan = $_GET['id_pengaduan'];
                $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'");
                while ($data = mysqli_fetch_assoc($query)) {
                    // $id_pengaduan = $data['id_pengaduan'];
                    $nik = $data['nik'];
                    $tgl_pengaduan = $data['tgl_pengaduan'];
                    $isi_laporan = $data['isi_laporan'];
                    $foto = $data['foto'];
                    $status = $data['status'];
                }
                ?>
                <!-- <p>Silahkan Isi Data Pengaduan Anda</p><br/> -->

                <form action="../admin/edit_data_aduan.php" method="post">
                    <!-- <label for="">Nama Pengadu</label><br/>
                    <input type="text" name="" id="" class="form-control"></br> -->

                    <label for="">NIK / No.KTP</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="<?= $nik ?>" readonly><br/>

                    <label for="">Tanggal Pengaduan</label>
                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value="<?= $tgl_pengaduan ?>" readonly><br/>

                    <label for="">Isi Laporan</label>
                    <input type="text" name="isi_laporan" id="isi_laporan" class="form-control" value="<?= $isi_laporan ?>" readonly><br/>

                    <!-- <label for="">Foto Lampiran</label>
                    <input type="file" name="foto" id="foto" class="form-control"><br/> -->

                    <input type="hidden" name="id_pengaduan" value="<?=$id_pengaduan?>">
                    <label for="">Status Data</label>
                    <select name="status" class="form-control" id="status">
                        <option value="">-- Pilih --</option>
                        <option value="0">Baru Masuk</option>
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                    </select><br/>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-default"><a href="../admin/data_pengaduan.php">Batal</a></button>
                    <!-- <a href="../logout.php" class="btn btn-danger">Logout</a> -->
                    <!-- <button class="btn btn-default"><a href="../logout.php">Logout</a></button> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>