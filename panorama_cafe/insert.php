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

        mysqli_query($koneksi, "INSERT INTO `promo`(`promo`, `coffee`, `harga`, `gambar`) VALUES ('$PROMO','$COFFEE','$PRICE','$img_des')");
        mysqli_query($koneksi, "ALTER TABLE promo DROP COLUMN id");
        mysqli_query($koneksi, "ALTER TABLE `promo` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)");
        header("Location:beranda.php");
    }
?>