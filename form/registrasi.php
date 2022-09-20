<?php
    require '../function/function_registrasi.php';

    if(isset($_POST["register"])){

        if(registerasi($_POST) > 0){
            header("location: ../index.php");
            echo"<script>alert('user di tambahkan')</script>";
        }else{
            echo mysqli_error($koneksi);
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
    <style>
        label{
            display:block;
        }
        body {
            font-family:sans-serif;
            background-image: url("../asset/img/uwu.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login {
            width: 350px;
            background: white;
            margin: 80px auto;
            padding: 30px 20px;
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
<body>
    <h1 class="judul">welcome to registrasi</h1>

    <form class="kotak_login" action="" method="post">

       
                
                <input type="text" placeholder="username" name="username" required><br>
                <br>
                <input type="password" placeholder="password" name="password" required><br>
                <br>
                <input type="password" placeholder="konfirmasi password" name="password2" required><br>
                <br>
           
                <button type="submit" name="register">register</button>
        <p><a href="../index.php">sudah memiliki akun</a></p>
    </form>
</body>
</html>