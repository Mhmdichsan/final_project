<?php
include 'koneksi.php';

$id_mobil = $_GET['id_mobil'];
$sql = "SELECT * FROM tb_parking WHERE id_mobil = '$id_mobil'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <h1 class="navbar-brand" href="#">E-PARKING</h1>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Parking lot in office</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" role="button">Logout</a>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <form action="update.php?id_mobil=<?php echo $id_mobil;?>" method="POST" class="pt-5">
          <?php 

            $hasil = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($hasil)> 0) {
              while ($baris = mysqli_fetch_assoc($hasil)) {
                $id_mobil = $baris['id_mobil'];
                ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Car: </label>
                  <input type="text" name="id_mobil" class="form-control" value="<?php echo $baris['id_mobil'];?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name: </label>
                  <input type="text" name="name" class="form-control" value="<?php echo $baris['name'];?>" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Car Name</label>
                  <input type="text" name="mobil" class="form-control" value="<?php echo $baris['mobil'];?>" placeholder="Enter Car Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Plat Number</label>
                  <input type="text" name="plat" class="form-control" value="<?php echo $baris['plat'];?>" placeholder="Enter Plat Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            <?php
              }
            }
          ?>
            
          </form>
        </div>
      </div>

      <div class="container">

</body>
</html>