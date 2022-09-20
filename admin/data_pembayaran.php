<?php
    include "../conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pembayaran</title>
    <style>
        .form{
            background-color: #CDF0EA;
            padding: 20px;
            border-radius: 5px;
        }
        body{
            padding: 0;
            margin: 0;
        }
        input,textarea,select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button{
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            background-color: #ccc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 800;
        }

        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: lightblue;
            margin: 0 ;
            padding: 0;
            
            
        }
        .menu-list{
            float: left;
        }
        .menu-list a {
            display: block;
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
        }
        .menu-list a:hover {
            background-color: gray;
        }
        .judul{
            width: 100%;
            padding: 1px 20px;
            background-color: #CDF0EA;
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="welcome.php">Home</a></li>
        <li class="menu-list"><a href="data_pembayaran.php">pembayaran</a></li>
        <li class="menu-list"> <a href="../logout.php"Logout></a></li>
    </ul>
    <div class="judul">
    <h1>silahkan isi bidang di bawah ini</h1>
    </div>
    <form class="form" action="../input/input_data_pembayaran.php" method="post">
    <label for="">id pembayaran</label><br>
    <input type="text" name ="id_pembayaran" id="" value="<?= rand(0000, 9999)?>" readonly>
    <br><br>
    <label for="">id pendaftar</label><br>
    <input type="text" name ="id_pendaftar" id="">
    <br><br>
    <label for="">jenis lapangan</label><br>
    <select name="jenis_lapangan" id="">
        <option value="a">lapangan a (matras)</option>
        <option value="b">lapangan b (sistetis)</option>
        <option value="c">lapangan c (vinyl)</option>
    </select>
    <br><br>
    <label for="">jenis pembayaran</label>
    <select name="jenis_pembayaran" id="">
        <option value="cash">cash</option>
        <option value="transfer">transfer</option>
    </select>
    <br><br>
    <label for="">nominal pembayaran</label><br>
    <input type="text" name="nominal_pembayaran" id="">
    <br><br>
    <select name="status_pembayaran" id="">
        <option value="...">...</option>
        <option value="lunas">lunas</option>
    </select>

        <button type="submit">kirim</button>
    </form>
    
</body>
</html>