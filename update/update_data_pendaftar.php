<?php
    include "../conection.php";
    $id_pendaftar = $_POST['id_pendaftar'];
    $nama_pendaftar= $_POST['nama_pendaftar'];
    $nomor_hp= $_POST['nomor_hp'];
    $alamat= $_POST['alamat'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $jenis_pembayaran= $_POST['jenis_pembayaran'];
    $nominal_pembayaran= $_POST['nominal_pembayaran'];

    $update = mysqli_query($koneksi, "UPDATE data_pendaftar SET id_pendaftar='$id_pendaftar',nama_pendaftar='$nama_pendaftar',
    nomor_hp='$nomor_hp',alamat='$alamat', jenis_lapangan='$jenis_lapangan', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai',
    jenis_pembayaran='$jenis_pembayaran', nominal_pembayaran='$nominal_pembayaran' WHERE id_pendaftar=$id_pendaftar");
    if($update){
        $message = 'data sudah di rubah';
    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('../admin/data_pendaftar.php');
    </SCRIPT>";
        
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
