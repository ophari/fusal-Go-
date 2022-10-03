<?php
    include "../conection.php";
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
   .form{
            background-color: #6290c8;
            padding: 20px;
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
            background-color: #1f487e;
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
            background-color: #1f487e;
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
            background-color: #1d3461;
        }
        .judul{
            padding: 1px 20px;
            background-color: #6290c8;
        }
    </style>
    </style>

</head>
<body>
        <ul class="menu">
            <li class="menu-list"><a href="../admin/data_pembayaran.php">Home</a></li>
        </ul>
    
            
    <form  class="form" action="../input/input_data_pembayaran.php" value="id"  method="post">
    <div class="row mb-3">
            
                <label for="">Id Pembayaran</label>
                <input type="text"  name="id_pembayaran" value="<?= rand(0000, 9999)?>" readonly>
                <label for="">id pendaftar</label>
                <input type="text" placeholder="id_pendaftar" name="id_pendaftar" value="<?= rand(0000, 9999)?>" readonly>
                <label for="">jenis lapangan</label>
                <select name="jenis_lapangan">
                <option value="A (Matras)">Lapangan A (Matras)</option>
                <option value="B (Sintetis)">Lapangan B (Sintetis)</option>
                <option value="C (Vinyl)">Lapangan C (Vinyl)</option>
                </select>
                <label for="">jenis pembayaran</label>
                <select name="jenis_pembayaran" >
                <option value="cash">Cash</option>
                <option value="Transfer">Transfer</option>
                <option value="ovo">ovo</option>
                <option value="gopay">gopay</option>
                </select>
                <label for="">Rupiah</label>
                <input type="text" name="nominal_pembayaran" id="dengan-rupiah">
             
                
                <label for="">status_pembayaran</label>
                <select name="status_pembayaran" id="">
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
<script src="../function/rupiah.js"></script>
</body>
</html>