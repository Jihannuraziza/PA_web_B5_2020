<?php

    include 'config.php';
    echo $ID = $_GET['ID'];
    mysqli_query($koneksi, "DELETE FROM `promo` WHERE id = $ID");
    header('location:read_promo.php');

?>
