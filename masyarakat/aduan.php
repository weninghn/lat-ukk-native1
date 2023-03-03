<!DOCTYPE html>
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
                <h3>Form Aduan</h3>
                <p>Silahkan Isi Data Pengaduan Anda</p><br/>

                <form action="../masyarakat/proses_aduan.php" method="post">

                    <label for="">NIK / No.KTP</label>
                    <input type="text" name="nik" id="nik" class="form-control" ><br/>

                    <label for="">Tanggal Pengaduan</label>
                    <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control"><br/>

                    <label for="">Isi Laporan</label>
                    <input type="text" name="isi_laporan" id="isi_laporan" class="form-control"><br/>

                    <label for="">Foto Lampiran</label>
                    <input type="file" name="foto" id="foto" class="form-control"><br/>
                    
                    <label for="">Status Data</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">Baru Dikirim</option>
                    </select><br/>
                    <!-- <input type="text" name="status" class="form-control" id="status"><br/> -->

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-default"><a href="../masyarakat/index.php">Batal</a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>