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
    <header>

        <div class="wrapper">
            <center>
                <h1>PANORAMA CAFE</h1>
            </center>
        </div>

        <div class="welcome-text">
            <center>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veniam optio magnam fuga adipisci? Provident minus voluptatem, suscipit deleniti delectus praesentium accusantium necessitatibus eius debitis in eos voluptas quisquam aliquam.</h3>
                <button style=" background-color: transparent;
                                border: 1px solid #fff;
                                border-radius: 30px;
                                padding: 10px 25px;
                                text-decoration: none;
                                font-size: 14px;
                                margin-top: 30px;
                                display: inline-block;
                                cursor: pointer;
                                color: white;
                                " 
                            onmouseover = " this.style.backgroundColor = '#4CAF50';
                                            this.style.color = '#fff';
                                            this.style.borderRadius = '30px';"
                            onmouseout = "this.style.backgroundColor = 'transparent';
                                            this.style.color = '#fff';
                                            this.style.borderRadius = '30px';"
                                onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                    Bergabung untuk mengakses lebih lengkap
                </button>
            </center>    
        </div>

        

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
                
            <button type="submit" name="submit" value="LOGIN"
                style=" background-color: #04AA6D;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        border-radius: 30px;
                        width: 100%;"
                        
        
                onmouseover = " this.style.backgroundColor = '#4CAF50';
                                this.style.color = '#fff';
                                this.style.borderRadius = '30px';"
                onmouseout  = " this.style.backgroundColor = '#04AA6D';
                                this.style.color = '#fff';
                                this.style.borderRadius = '30px';"        >
                Login
            </button>
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
    </header>


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