<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title> 
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
          <a href="create.php" class="nav-link active mx-3">Add</a>
          <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" role="button">Logout</a>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, <?php echo $_SESSION["username"];?></h1>
          <p>Please enter the data of the car that will enter the office</p>
        </div>
      </div>

      <div class="container">
        
        <!-- <div class="row">
          <div class="col-md-4"> -->
          <table class="table table-striped table-hover">
            <caption>List of cars</caption>
    
    <?php
        $sql = "SELECT * FROM tb_parking";
        $hasil = mysqli_query($koneksi, $sql);
    ?>
    
  <thead class="thead-dark">
    <tr>
      <th >#</th>
      <th >Name</th>
      <th >Car</th>
      <th >Plate</th>
      <th>Action</th>
     
    </tr>
  </thead>
    <?php
        if (mysqli_num_rows($hasil)> 0) {
            while ($baris = mysqli_fetch_assoc($hasil)) {
                $id_mobil = $baris['id_mobil'];
                ?>

                <tr>
                    <td><?php echo $baris['id_mobil']; ?></td>
                    <td><?php echo $baris['name']; ?></td>
                    <td><?php echo $baris['mobil']; ?></td>
                    <td><?php echo $baris['plat']; ?></td>
                    <td><a href="edit.php?id_mobil=<?php echo $id_mobil;?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> 
                    <a href="delete.php?id_mobil=<?php echo $id_mobil; ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>
                  
            <?php
            }
        }else {
            ?>
            <tr>
                <td><?php echo "0 Hasil";?></td>
            </tr>
            <?php
        }
        ?>
</table>
    <br>
    <br>
    <br>
    <footer class="container">
      <p>&copy; Company 2023-2024</p>
    </footer>
    
</body>
</html>