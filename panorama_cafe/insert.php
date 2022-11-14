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
        header("Location:beranda.php");
    }
?>