<?php
    include "../conection.php";
    $id = $_GET['id'];
    $select = mysqli_query($koneksi, "SELECT * FROM data_pembayaran WHERE id_pembayaran='$id'");
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
        
        input,textarea,select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
    <form action="../update/update_data_pembayaran.php" value="id"  method="post">
    <div class="row mb-3">
            
                <label for="">Id Pembayaran</label>
                <input type="text"  name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>" readonly>

                <label for="">id pendaftar</label>
                <input type="text" placeholder="id_pendaftar" name="id_pendaftar" value="<?php echo $data['id_pendaftar'] ?>" readonly>

                <label for="">jenis lapangan</label>
                <select name="jenis_lapangan" value="<?php echo $data['jenis_lapangan'] ?>">
                <option value="A (Matras)">Lapangan A (Matras)</option>
                <option value="B (Sintetis)">Lapangan B (Sintetis)</option>
                <option value="C (Vinyl)">Lapangan C (Vinyl)</option>
                </select>
                
                <label for="">jenis pembayaran</label>
                <select name="jenis_pembayaran" value="<?php echo $data['jenis_pembayaran'] ?>">
                <option value="cash">Cash</option>
                <option value="Transfer">Transfer</option>
                <option value="ovo">ovo</option>
                <option value="gopay">gopay</option>
                </select>

                <label for="">Rupiah</label>
                <input type="text" name="nominal_pembayaran" id="dengan-rupiah" value="<?php echo $data['nominal_pembayaran'] ?>"/>
             
                
                <label for="">status_pembayaran</label>
                <select name="status_pembayaran" id="" value="<?php echo $data['status_pembayaran'] ?>">
                <option value="...">...</option>
                <option value="lunas">Lunas</option>
                </select>

            <button type="submit" class="col-sm-3 col-form-label">Kirim</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../admin/data_pembayaran.php" name="proses" role="button">Cancel</a>
            </div>
          </div>
        </form>
    </div>
    <?php
    break;
    }
    ?>
    <script src="../function/rupiah.js"></script>
</body>
</html>