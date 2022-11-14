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
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="css/read_promo.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <ul class="nav-area" >
                <li><a href="create_promo.php">Tambah Promo</a></li>
                <li><a href="read_promo.php">Promo</a></li>
                <li><a href="read_pesanan.php">Pesanan</a></li>
                <li><a href="fpdfdemo.php">Riwayat</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>


        <center>
            <div class="welcome-text" id="welcome-text" ">
                <div class="textBox" >
                <form action="read_pesanan.php" method="get">
                    <label for="Search" style="color:white;">Search : </label>
                    <input type="text" name="cari">
	                <input type="submit" value="Cari">
                </form>
                <br>
                        
                <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    // echo "<b>Hasil pencarian : ".$cari."</b>";
                }
                ?>
                    <table border="1" style='width:100%'>
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Coffee</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <!-- <th>Delete</th> -->
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'config.php';

                                if(isset($_GET['cari'])){
                                    $search_username = mysqli_query($koneksi, "SELECT * FROM `daftar_pesanan` WHERE fullname like '%".$cari."%'");                                    
                                    
                                }
                                else{
                                    $search_username = mysqli_query($koneksi, "SELECT * FROM `daftar_pesanan`");
                                }

                                mysqli_query($koneksi, "ALTER TABLE daftar_pesanan DROP COLUMN id");
                                mysqli_query($koneksi, "ALTER TABLE `daftar_pesanan` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)");
                                // echo "Auto_increment reset to 1 Successfully ! ";

                                while($row = mysqli_fetch_array($search_username)){
                                    echo "
                                    <tr>
                                        <td>$row[fullname]</td>
                                        <td>$row[coffee]</td>
                                        <td>$row[harga]</td>
                                        <td>$row[status]</td>
                                        <td><a href='update_pesanan.php?ID=$row[id] ' class='update'>Update</a></td>
                                    </tr>                    
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </header>
</body>
</html>