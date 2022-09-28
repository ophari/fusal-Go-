<?php
include "../conection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #D6E9E7;
            margin: 0;
            padding: 0;
        }
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #1f487e;
            margin: 0 ;
            padding: 0;       
        }
       
        .menu-list{
            float: left;

        }
        .menu-list a{
            font-family: Ovo;
            display: block;
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
        }
        .menu-list a:hover{
            background-color: #1d3461;
        }
        h1{
            
            text-align: center;
            font-family: Ovo;
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"> <a href="../admin/welcome.php">Home</a></li>
        <li class="menu-list"> <a href="../logout.php">Logout</a></li>
    </ul>
    
   <br><br>
   <h1>Table data pendaftar</h1>
    <?php $i=1;?>
    <table border="2" align="center" cellpadding = "10" cellspacing ="1">
        <tr>
            <th align="center">ID</th>
            <th align="center">Id Pendaftar</th>
            <th align="center">Nama Pendaftar</th>
            <th align="center">Nomor HP</th>
            <th align="center">Alamat</th>
            <th align="center">Jenis Lapangan</th>
            <th align="center">Jam Mulai</th>
            <th align="center">Jam Selesai</th>
            <th align="center">Jenis Pembayaran</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_pendaftar");
            while($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td align="center"><?= $data['id'];?></td>
                <td align="center"><?= $data['id_pendaftar'];?></td>
                <td align="center"><?= $data['nama_pendaftar'];?></td>
                <td align="center"><?= $data['nomor_hp'];?></td>
                <td align="center"><?= $data['alamat'];?></td>
                <td align="center"><?= $data['jenis_lapangan'];?></td>
                <td align="center"><?= $data['jam_mulai'];?></td>
                <td align="center"><?= $data['jam_selesai'];?></td>
                <td align="center"><?= $data['jenis_pembayaran'];?></td>
            </tr>
        <?php }
    ?>
        </table>
</body>
</html>