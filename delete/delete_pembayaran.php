<?php
     include "../conection.php";
     $id=$_GET["id"];

     $delete = mysqli_query($koneksi, "DELETE FROM data_pembayaran WHERE id=$id");
     if($delete){
        header('location: ../admin/data_pembayaran.php');
     } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
     }
?>