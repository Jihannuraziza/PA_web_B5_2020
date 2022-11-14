<?php
    session_start();

    include "config.php";

    $username = $_POST["username"];
    $p = md5($_POST["password"]);

    // $sql = "SELECT * FROM pengguna where username "
    // $sql = "select * from user where username='".$username."' and password='".$p."' limit 1";
    $sql = "SELECT * FROM `akun` WHERE username = '$username'  AND password = '$p'";
    $hasil = mysqli_query($koneksi, $sql);
    $jumlah = mysqli_num_rows($hasil);


        if($jumlah > 0){
            $row = mysqli_fetch_assoc($hasil);
            $_SESSION["id"] = $row["id"];
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];

            header("Location:beranda.php");
        }else{
            // echo "Username atau Password salah";
            $sql = "SELECT * FROM `akun_admin` WHERE username = '$username'  AND password = '$p'";
            $hasil = mysqli_query($koneksi, $sql);
            $jumlah = mysqli_num_rows($hasil);

            if($jumlah > 0){
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["id"] = $row["id"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["password"] = $row["password"];
    
                header("Location:admin.php");
            }
        }
?>