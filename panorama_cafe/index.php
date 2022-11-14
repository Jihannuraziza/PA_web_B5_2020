<?php
    // include "config.php";
    // session_start();
    // if(isset($_POST["submit"])){

    //     $username = $_POST["username"];
    //     $p = md5($_POST["password"]);

    //     $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$p'");
    //     $result = mysqli_num_rows($query);

    //     if($result > 0){
    //         $row = mysqli_fetch_assoc($query);
    //         $_SESSION['id'] = $row['id'];
    //         $_SESSION['nama'] = $row["nama"];
    //         $_SESSION["username"] = $row["username"];
    //         $_SESSION["password"] = $row["password"];

    //         header("Location:beranda.php");
    //     }
    //     else{
    //         header("Location:index.php");
    //     }
        // $username = $result['username'];
        // if(password_verify($password, $result['password'])){
        //     $_SESSION['login'] = true;
        //     $_SESSION['nama'] = $result['nama'];
        //     $_SESSION['username'] = $result["username"];
        //     echo "
        //     <script>
        //         alert('Selamat Datang $username');
        //         document.location.href = 'beranda.php';
        //     </script>            
        //     ";
        // }
        // else{
        //     $query = mysqli_query($koneksi, "SELECT * FROM akun_admin WHERE username = '$username'");
        //     $result = mysqli_fetch_assoc($query);
        //     $username = $result['username'];
        //     if(password_verify($password, $result['password'])){
        //         $_SESSION['login'] = true;
        //         $_SESSION['nama'] = $result['nama'];
        //         $_SESSION['username'] = $result["username"];
        //         echo "
        //         <script>
        //             alert('Selamat Datang $username');
        //             document.location.href = 'beranda.php';
        //         </script>            
        //         ";
        //     }
        // }
//     }
// ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Landing Page</title>
</head>
<body>
    <center>
        <h2>Selamat Datang Di PANORAMA CAFE</h2>
        <h3>Login Dahulu Sebelum Lanjut</h3>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </center>    
    

    <div id="id01" class="modal">
    
    <form class="modal-content animate" action="login_action.php" method="post">
        <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
            
        <button type="submit" name="submit" value="LOGIN">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw"><a href="registrasi.php">Register?</a></span>
        </div>
    </form>
    </div>

<script>
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
}
</script>
</body>
</html>