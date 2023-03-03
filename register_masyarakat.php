<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Register | masyarakat</title>
    <style>
        .tombol_login{
    background: #2aa7e2;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow mt-5" style="position: relative; width:80%; margin-left:15%">
            <div class="card-body">
                <center><h1>Form Register</h1></center>
                <h4>Silahkan Isi Data Diri</h4>
                <br/>
                <form action="proses_register_masyarakat.php" method="post">
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK.."><br/>

                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama.."><br/>

                    <input type="text" class="form-control" name="username" id="username" placeholder="Username.."><br/>

                    <input type="text" class="form-control" name="password" id="password" placeholder="Password.."><br/>

                    <input type="text" class="form-control" name="telp" id="telp" placeholder="No Telpon.."><br/>

                    <input type="submit" class="tombol_login" value="Daftar" name="" id="">

                    <br/>
                    <br/>
                    <center>
                    <p><a href="index.php">Sudah Punya Akun ? Login</a></p>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>