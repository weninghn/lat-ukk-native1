<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login | Masyarakat</title>
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
    <?php 
    if (isset($_GET['pesan'])) {
        if($_GET['pesan'] == "gagal")
        {
            echo "<div class='alert'>Username Atau Password Salah </div>";
        }
    }
    ?>
    <div class="container">
        <div class="card shadow mt-5" style="position: relative; width:80%; margin-left:15%">
            <div class="card-body">
                <center><h1>Form Login</h1></center>
                <h4>Silahkan Login</h4>
                <br/>
                <form action="proses_login_masyarakat.php" method="post">
                    <!-- <label for="">Username :</label> -->
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username.."><br/>

                    <!-- <label for="">Password :</label> -->
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password.."><br/>

                    <input type="submit" class="tombol_login" value="Login" name="" id="">

                    <br/>
                    <br/>
                    <center>
                    <p><a href="register_masyarakat.php">Belum Punya Akun ? Daftar</a></p>
                    </center>
                    <center>
                        <p><a href="login_petugas.php">Login Sebagai Petugas / Admin</a></p>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>