<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create_promo.css">
    <title>Create Promo</title>
</head>
<body>
    <?php
        include 'config.php';
        try {
            //code...
            $ID = $_GET['ID'];
            $Record = mysqli_query($koneksi, "SELECT * FROM daftar_pesanan WHERE id = $ID");
            $data = mysqli_fetch_array($Record);
        } catch (\Throwable $th) {
            //throw $th;
            header("location:read_promo_user.php");
        }
    ?>

    <header>
        <div class="wrapper">
            <center>
                <h1>Pesanan</h1>
            </center>
        </div>

        <center>
            <div class="content" id="content">
                <div class="textBox">
                    <h2><span>Form Pemesanan</span></h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" id="coffee" name="coffee" value=<?php echo $data['coffee']?> placeholder="Coffee Name..."><br>
                        <input type="text" id="price" name="price" value=<?php echo $data['harga']?> placeholder="Price..."><br>
                        <input type="text" id="fullname" name="fullname" value=<?php echo $data['fullname']?> placeholder="Enter your Name..."><br>
                        <input type="text" id="status" name="status" value=<?php echo $data['status']?>><br><br>
                        <!-- <input type="text" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"> -->
                        <!-- <select id="country" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select> -->
                        <!-- <input type="file" name="image" value=<?php echo $data['gambar']?> id="image"><br><br> -->
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="upload"
                        style=" background-color: #04AA6D;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        border-radius: 30px;
                        width: 50%;"
                        >Pesan</button>
                    </form>


                    <?php
                        include 'config.php';

                        if(isset($_POST['upload'])){
                            // $PROMO = $_POST['promo'];
                            $COFFEE = $_POST['coffee'];
                            $PRICE = $_POST['price'];
                            $FULLNAME = $_POST['fullname'];
                            $STATUS = $_POST['status'];
                            // $IMAGE = $_FILES['images'];

                            // $img_loc = $_FILES['image']['tmp_name'];
                            // $img_name = $_FILES['image']['name'];
                            // $img_des = "uploadImage/".$img_name;
                            // move_uploaded_file($img_loc, "uploadImage/".$img_name);
                            // mysqli_query($koneksi, "INSERT INTO `daftar_pesanan`(`fullname`, `coffee`, `harga`, `status`) VALUES ('$FULLNAME','$COFFEE','$PRICE','$STATUS')");
                            mysqli_query($koneksi, "UPDATE `daftar_pesanan` SET `fullname`='$FULLNAME', `coffee`='$COFFEE', `harga`='$PRICE', `status`='$STATUS' WHERE id=$ID");
                            header("Location:admin.php");
                        }
                    ?>
                </div>
            </div>
        </center>

    </header>

    
</body>
</html>