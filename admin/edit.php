<?php
    include "../conection.php";
    $id = $_GET['id'];
    $select = mysqli_query($koneksi, "SELECT * FROM data_pendaftar WHERE id_pendaftar='$id'");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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
    <div class="container my-5">
        <h2>Edit Data</h2>
        <?php
        while ($data = mysqli_fetch_array($select)){
            ?>
    <form action="update_data.php" value="id"  method="post">
    <div class="row mb-3">
            
            
                <input type="text"  name="id_pendaftar" value="<?php echo $data['id_pendaftar'] ?>" readonly>
                <input type="text" placeholder="jenis lapangan" name="jenis_lapangan" value="<?php echo $data['jenis_lapangan'] ?>">
                <input type="time" placeholder="jam mulai" name="jam_mulai" value="<?php echo $data['jam_mulai'] ?>">
                <input type="time" placeholder="jam selesai" name="jam_selesai" value="<?php echo $data['jam_selesai'] ?>">

            <button type="submit" class="col-sm-3 col-form-label">Kirim</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="data_lapangan.php" name="proses" role="button">Cancel</a>
            </div>
          </div>
        </form>
    </div>
    <?php
    break;
    }
    ?>
</body>
</html>