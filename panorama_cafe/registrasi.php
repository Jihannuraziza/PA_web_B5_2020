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
    <form class="modal-content animate" action="" method="post">
        <div class="imgcontainer">

        <img src="avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        
        <label for="name"><b>Fullname</b></label>
        <input type="text" placeholder="Enter Your Name" name="nama" id="nama" required>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
            
        <button type="submit" name="register" value="LOGIN">REGISTER</button>
        
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <center>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                <a href="index.php">Cancel</a>
            </button>
        </center>

        <!-- <span class="psw"><a href="registrasi.php">password?</a></span> -->
        </div>
    </form>
    <!-- </div> -->

    <?php
        include 'config.php';
        if(isset($_POST['register'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            mysqli_query($koneksi, "INSERT INTO `akun`(`nama`, `username`, `password`) VALUES ('$nama', '$username', '$password')");
            header("Location: index.php");
        }
    ?>

<!-- <script>
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
} -->
<!-- </script> -->
</body>
</html>