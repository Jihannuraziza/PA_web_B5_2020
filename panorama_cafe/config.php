<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "panorama";

    $koneksi = mysqli_connect($hostname, $username, $password, $database);
    if(!$koneksi){
        echo "Koneksi tidak terhubung";
    }
?>