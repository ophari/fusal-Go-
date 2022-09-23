<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="futsal_go";
    //futsal_go for master

    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("gagal");
    }
    
?>