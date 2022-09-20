<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="futsal_go";

    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("gagal");
    }
    
?>