<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION ['username'])){
    header ("Location : dshboard.php");
}
?>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.cs">
<div class="container">
<div class="login-form">
    <form action="" method="POST" class="w-25 mx-auto mt-5">
        <h2 class="text-center pb-4">LOGIN</h2>
		    <div class="or-seperator"></div>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
          <input type="submit" name="submit" value="Log in" class="btn btn-dark btn-success btn-block login-btn">
        </div>
        
        <div class="ml-0 text-center">Don't have an account? <a href="registrasi.php" class="text-success">Register Now!</a></div>
    </form>
   
</div>
</div>
</body>


<?php
    if (isset ($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND pass = '$pass'";
        $query = mysqli_query($koneksi, $sql);
        if ($query -> num_rows > 0 ) {
            $row = mysqli_fetch_assoc ($query);
            $_SESSION['username'] = $row ['username'];
            ?><script> alert ('login success!')
            window.location ='dshboard.php'
            </script>
            <?php
        }else {
            ?> <script>
                alert ('Username and password incorrect, try again!');
                </script>
            <?php 
        }
    }  
?>