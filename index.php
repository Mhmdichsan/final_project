<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION ['username'])){
    header ("Location : dshboard.php");
}
?>

<link rel="stylesheet" href="styles.css">
<div class="flex-container">
    <div class="content-container">
      <div class="form-container">
        <form action="" method="POST">
          <h1>
            Login
          </h1>
          <br>
          <br>
          <span class="subtitle">USERNAME:</span>
          <br>
          <input type="text" name="username" value="">
          <br>
          <span class="subtitle">PASSWORD:</span>
          <br>
          <input type="password" name="pass" value="">
          <br><br>
          <input type="submit" name="submit" value="LOGIN" class="submit-btn">
          <p>Dont have account? <a href="registrasi.php">Register!</a></p>
        </form>
      </div>
    </div>
  </div>

<?php
    if (isset ($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND pass = '$pass'";
        $query = mysqli_query($koneksi, $sql);
        if ($query -> num_rows > 0 ) {
            $row = mysqli_fetch_assoc ($query);
            $_SESSION['username'] = $row ['username'];
            ?><script> alert ('login berhasil!')
            window.location ='dshboard.php'
            </script>
            <?php
        }else {
            ?> <script>
                alert ('Nama atau NIM anda salah, silahkan coba lagi!');
                </script>
            <?php 
        }
    }  
?>