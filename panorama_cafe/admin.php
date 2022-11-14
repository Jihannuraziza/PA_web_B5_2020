<?php
    session_start();
    if(!isset($_SESSION["username"])){
        // echo "Anda harus login dulu <br><a href='login.php'>Klik Disini</a>";
        header("Location:index.php");
        exit;
    }

    
    
    $id=$_SESSION["id"];
    $nama=$_SESSION["nama"];
    $username=$_SESSION["username"];
    $password=$_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/beranda.css">
    <title>Beranda</title>
</head>
<body>
    <header style="">
        <div class="wrapper">
            <div class="logo">
                <img src="" alt="">
            </div>
            <ul class="nav-area">
                <li><a href="create_promo.php">Tambah Promo</a></li>
                <li><a href="read_promo.php">Promo</a></li>
                <li><a href="read_pesanan.php">Pesanan</a></li>
                <li><a href="fpdfdemo.php">Riwayat</a></li>
                <li><a href="https://www.instagram.com/panoramacaferesto/">Contact Us</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>

        <div class="welcome-text">
            <h1>Panorama Cafe</h1>
            <!-- <button> -->
                <a href="create_promo.php">Tambah Promo</a><br>
                <a href="read_promo.php">Daftar Promo</a><br>
                <a href="read_pesanan.php">Daftar Pesanan</a><br>
                <a href="fpdfdemo.php">Riwayat Pemesanan</a>
                <a href="https://www.instagram.com/panoramacaferesto/">Contact Us</a><br>
                <a href="logout.php">Log Out</a>
            <!-- </button> -->
        </div> 
    </header>
</body>
</html>