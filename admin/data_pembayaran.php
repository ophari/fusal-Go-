<?php
    include "../conection.php";
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
        <li class="menu-list"> <a href="../admin/welcome.php">Back to home</a></li>
        <li class="menu-list"> <a href="../form/pembayaran.php">Tambah data</a></li>
        
    </ul>
    <h1>Table Pembayaran</h1>
    <table border="1" align="center" cellpadding = "10" cellspacing ="1">
        <tr>
            <th align="center">no</th>
            <th align="center">id pembayaran</th>
            <th align="center">id pendaftar</th>
            <th align="center">jenis lapangan</th>
            <th align="center">jenis pembayaran</th>
            <th align="center">nominal pembayaran</th>
            <th align="center">status pembayaran</th>
            <th align="center">action</th>
        </tr>
        <?php
            $i=0;
            $query = mysqli_query($koneksi, "SELECT * FROM data_pembayaran");
            while($data = mysqli_fetch_array($query)){ ?>
            <?php $i++ ?>
            <tr>
                <td><?php echo $i ?></td>
                <td align="center"><?= $data['id_pembayaran'];?></td>
                <td align="center"><?= $data['id_pendaftar'];?></td>
                <td align="center"><?= $data['jenis_lapangan'];?></td>
                <td align="center"><?= $data['jenis_pembayaran'];?></td>
                <td align="center"><?= $data['nominal_pembayaran'];?></td>
                <td align="center"><?= $data['status_pembayaran'];?></td>
                <td style="text-align:center">
                <a href="../edit/edit_pembayaran.php?id=<?php echo $data['id_pembayaran']?>">Edit</a>
                <a class="delete" href="../delete/delete_pembayaran.php?id=<?php echo $data['id']?>">Delete</a>
            </td> 
            </tr>
        <?php }
    ?>
        </table>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>