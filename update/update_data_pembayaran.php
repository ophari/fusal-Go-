<?php
    include "../conection.php";
    $id_pembayaran = $_POST['id_pembayaran'];
    $id_pendaftar = $_POST['id_pendaftar'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $nominal_pembayaran= $_POST['nominal_pembayaran'];
    $status_pembayaran= $_POST['status_pembayaran'];

    $update = mysqli_query($koneksi, "UPDATE data_pembayaran SET id_pembayaran='$id_pembayaran', id_pendaftar='$id_pendaftar',jenis_pembayaran='$jenis_pembayaran', 
    jenis_lapangan='$jenis_lapangan',nominal_pembayaran='$nominal_pembayaran',status_pembayaran='$status_pembayaran' WHERE id_pembayaran=$id_pembayaran");
    if($update){
        $message = 'data sudah di rubah';
        echo "<SCRIPT> //not showing me this
            alert('$message')
            window.location.replace('../admin/data_pembayaran.php');
        </SCRIPT>";
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }

