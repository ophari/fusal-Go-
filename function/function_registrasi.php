<?php
include "../conection.php";

    function registerasi($data){
        global $koneksi;

        
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($koneksi, "SELECT username FROM login WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('username sudah tersedia')</script>";
            return false;
        }
        
        //CEK KONFIRMASI PASSWORD

        if( $password !== $password2){
            echo"<script>alert('konfirmasi password salah')</script>";
            return false;
        }
        
 //enkripsi password
    //  $password = password_hash($password, PASSWORD_DEFAULT);
    
    //memasukan ke database
    
   mysqli_query($koneksi, "INSERT INTO login VALUES('','','$username','$password','')");

   return mysqli_affected_rows($koneksi);
    }
?>
