<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add Data</title>
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
            <form action="tambah.php" method="POST" class="pt-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name: </label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Car Name</label>
                  <input type="text" name="mobil" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Plat Number</label>
                  <input type="text" name="plat" class="form-control">
                </div>
 
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="dshboard.php" class="btn btn-danger">Back</a>

            </form>
        </div>
      </div>

      <div class="container">

</body>
</html>