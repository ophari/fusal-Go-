<?php
     include "../conection.php";
     $id=$_GET["id"];
 
     $delete = mysqli_query($koneksi, "DELETE FROM data_pendaftar WHERE id=$id");
     if($delete){
         header('location: ../admin/data_pendaftar');
     } else {
         echo "<script>alert('Gagal input data pendaftar')</script>";
     }
?>