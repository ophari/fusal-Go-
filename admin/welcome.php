<?php
    session_start();
    if($_SESSION['level'] = ""){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat datang</title>
    <style>
         body{
            margin: 0;
            padding: 0;
        }
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: lightblue;
            margin: 0;
            padding: 0;
            
            
        }
        .menu-list{
            float: left;
        }
        .menu-list a {
            display: block;
            color: white;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
        }
        .menu.list a:hover {
            background-color: white;
        }
        .jumbotron{
            padding: 30px;
        }
        .container{
            padding: 30px;
            margin: 0;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: #ECC5FB;
        }
        .jumbotron h1{
            text-align: left;
            font-family: 'raleway'Arial, Helvetica, sans-serif ;
            color: white ;
            font-weight: 600;
            font-size: 70px;
            text-transform: uppercase;
        }
        .jumbotron p{
            text-align: left;
            font-family: 'raleway'Arial, Helvetica, sans-serif ;
            color: white ;
            font-weight: 600;
            font-size: 40px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="data_lapangan.php">isi data lapangan</a><br> </li>
        <li class="menu-list"><a href="data_pembayaran.php">update pembayaran</a></li>
        <li class="menu-list">  <a href="../logout.php">Logout</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>masuk sebagai admin</h1>
        <p>pilih lah menu di atas</p>
        </div>
    </div>
   
</body>
</html>
