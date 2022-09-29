<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Lapangan</title>
</head>
<style>    
    body{
        margin: 0;
        padding: 0;
        background-color: #6290c8;
        text-decoration: none;
    }
    .table{
        font-family: arial, helvetica, sans-serif; 
        border-collapse: collapse;
        font-size: 17pt;
        border: 1px solid #cccccc;
    }
    td {
        padding: 6px;
        height: 25px;
        color: white;
    }
    td a {
        color: white;
    }
    th {
        padding: 3px;
        background-color: steelblue;
        color: white;
        height: 50px;
        width: 150px;
    }
    .form{
        padding: 20px;
        border-radius: 5px;

    }
    
    .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #1f487e;
            padding: 0;
            margin: 0;
        }
    .menu-list{
            float: left;
            font-size: 13px;
            background-color: #1f487e;
        } 
    .menu-list a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
        }
    .menu-list a:hover{
            background-color: black;
        }
        .judul{
            width: 100;
            padding: 1px 20px;
            background-color: #123c69;
            color: white;
            text-align: center;
        }
    </style>
<body>
<ul class="menu">
        <li class="menu-list"><a href="../admin/welcome.php">Home</a></li>
        <li class="menu-list"><a href="../logout.php">Logout</a></li>
    </ul>
    <div class="judul"><h1>Table lapangan</h1></div>
    <form class= "form">

    <table class="table" border="1" align="center">
<tr>
            <th style="text-align:center">Id pendaftar</th>
            <th style="text-align:center">Jenis lapangan</th>
            <th style="text-align:center">Jam mulai</th>
            <th style="text-align:center">Jam akhir</th>
            <th style="text-align:center">Action</th>
        </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM data_pendaftar");
    while ($data=mysqli_fetch_array($query)){?>
        <tr>
            <td style="text-align:center"><?php echo $data['id_pendaftar'] ?></td>
            <td style="text-align:center"><?php echo $data['jenis_lapangan'] ?></td>
            <td style="text-align:center"><?php echo $data['jam_mulai'] ?></td>
            <td style="text-align:center"><?php echo $data['jam_selesai'] ?></td>
            <td style="text-align:center">
                <a href="edit.php?id=<?php echo $data['id_pendaftar']?>">Edit</a>
                <a class="delete" href="delete.php?id=<?php echo $data['id']?>">Delete</a>
            </td> 
        </tr>
    <?php }
    ?>

</table> </td>
</tr>
</table> </body>
</html>