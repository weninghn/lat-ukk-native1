<?php 
include '../petugas/navbar.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Tanggapan</title>
</head>
<body>
    <div class="container">
        <div class="card shadow mt-5">
            <div class="card-body">
                <h3>Form Tanggapan Data Pengaduan</h3>
                <p>Tuliskan Tanggapan Dari Data Pengaduan Dengan Benar</p>
                <form method="POST" action="../petugas/proses_petugas.php">
                    <label for="">ID Petugas</label>
                    <input type="text" name="id_petugas" readonly class="form-control" value='<?=$_SESSION['id']?>'><br/>

                    <label for="">Tanggapan</label>
                    <input type="text" name="tanggapan" id="tanggapan" class="form-control"><br/>

                    <label for="">ID Pengaduan</label>
                    <input type="text" name="id_pengaduan" readonly id="id_pengaduan" class="form-control" value ="<?=$_GET['id_pengaduan']?>"><br/>

                    <label for="">Tanggal Pengaduan</label>
                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value='<?=date('Y-m-d')?>'><br/>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-default"><a href="../petugas/index.php">Batal</a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>