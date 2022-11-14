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
    <link rel="stylesheet" href="css/create_promo.css">
    <title>Create Promo</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <center>
                <h1>Create Promo</h1>
            </center>
        </div>

        <center>
            <div class="content" id="content">
                <div class="textBox">
                    <h2><span>Promo Form</span></h2>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <input type="text" id="promo" name="promo" placeholder="Promo Name..."><br>
                        <input type="text" id="coffee" name="coffee" placeholder="Coffee Name..."><br>
                        <input type="text" id="price" name="price" placeholder="Price..."><br>
                        <!-- <input type="text" id="phone" name="phone" placeholder="08XX-XXXX-XXXX..."  pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"> -->
                        <!-- <select id="country" name="country">
                            <option value="Waffle">Waffle</option>
                            <option value="Pie Cherry">Pie Cherry</option>
                            <option value="Rainbow Cake">Rainbow Cake</option>
                        </select> -->
                        <input type="file" name="image" id="image"><br><br>
                        <!-- <input type="submit" name="submit"> -->
                        <button type="submit" name="upload"
                        style=" background-color: #04AA6D;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        border-radius: 30px;
                        width: 30%;"
                        >Upload</button>
                    </form>
                </div>
            </div>
        </center>

    </header>
</body>
</html>