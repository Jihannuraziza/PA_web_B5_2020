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
            $Record = mysqli_query($koneksi, "SELECT * FROM promo WHERE id = $ID");
            $data = mysqli_fetch_array($Record);
        } catch (\Throwable $th) {
            //throw $th;
            header("location:read_promo.php");
        }
    ?>

    <header>
        <div class="wrapper">
            <center>
                <h1>Update Promo</h1>
            </center>
        </div>

        <center>
            <div class="content" id="content">
                <div class="textBox">
                    <h2><span>Promo Form</span></h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" id="promo" name="promo" value=<?php echo $data['promo']?> placeholder="Promo Name..."><br>
                        <input type="text" id="coffee" name="coffee" value=<?php echo $data['coffee']?> placeholder="Coffee Name..."><br>
                        <input type="text" id="price" name="price" value=<?php echo $data['harga']?> placeholder="Price..."><br>
                        <!-- <input type="text" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"> -->
                        <!-- <select id="country" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select> -->
                        <input type="file" name="image" value=<?php echo $data['gambar']?> id="image"><br><br>
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="upload"
                        style=" background-color: #04AA6D;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        border-radius: 30px;
                        width: 100%;"
                        >Upload</button>
                    </form>


                    <?php
                        include 'config.php';

                        if(isset($_POST['upload'])){
                            $PROMO = $_POST['promo'];
                            $COFFEE = $_POST['coffee'];
                            $PRICE = $_POST['price'];
                            $IMAGE = $_FILES['images'];

                            $img_loc = $_FILES['image']['tmp_name'];
                            $img_name = $_FILES['image']['name'];
                            $img_des = "uploadImage/".$img_name;
                            move_uploaded_file($img_loc, "uploadImage/".$img_name);

                            mysqli_query($koneksi, "UPDATE `promo` SET `promo`='$PROMO', `coffee`='$COFFEE', `harga`='$PRICE', `gambar`='$img_des' WHERE id=$ID");
                            header("Location:read_promo.php");
                        }
                    ?>
                </div>
            </div>
        </center>

    </header>

    
</body>
</html>