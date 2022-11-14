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
    <title>List Promo</title>
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
                    <form action="read_promo.php" method="get">
                        <label for="Search" style="color:white;">Search : </label>
                        <input type="text" name="cari_promo">
                        <input type="submit" value="Cari">
                    </form>
                    <br>

                    <?php
                        if(isset($_GET['cari_promo'])){
                            $cari = $_GET['cari_promo'];
                        }
                    ?>

                    <table border="1" style='width:100%'>
                        <thead>
                            <tr>
                                <th>Promo</th>
                                <th>Coffee</th>
                                <th>Harga</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'config.php';

                                if(isset($_GET['cari_promo'])){
                                    $search_promo = mysqli_query($koneksi, "SELECT * FROM `promo` WHERE coffee LIKE '%".$cari."%'");
                                }
                                else{
                                    $search_promo = mysqli_query($koneksi, "SELECT * FROM `promo`");
                                }
                                while($row = mysqli_fetch_array($search_promo)){
                                    echo "

                                    <tr>
                                        <td>$row[promo]</td>
                                        <td>$row[coffee]</td>
                                        <td>$row[harga]</td>
                                        <td><img src='$row[gambar]' width='100px' height='100px' alt=''></td>
                                        <td><a href='delete.php?ID=$row[id] ' class='delete'>Delete</a></td>
                                        <td><a href='update_promo.php?ID=$row[id] ' class='update'>Update</a></td>
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