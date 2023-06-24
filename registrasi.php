<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.cs">
<div class="container">
<div class="login-form">
    <form action="regis.php" method="POST" class="w-25 mx-auto mt-5">
        <h2 class="text-center pb-4">REGISTRATION</h2>
        <p class="text-center">Fill your registration form</p>
		    <div class="or-seperator"></div>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nama" placeholder="Name" required="required">
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="alamat" placeholder="Address" required="required">
            </div>
        </div>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="no_hp" placeholder="Phone Number" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
          <input type="submit" name="submit" value="Submit" class="btn btn-dark btn-success btn-block login-btn">
        </div>
        <div class="form-group">
          <a href="index.php" class="btn btn-dark btn-success btn-block login-btn">Back</a>
          <!-- <input type="submit" name="submit" value="Back" class="btn btn-dark btn-success btn-block login-btn"> -->
        </div>
    </form>
   
</div>
</div>
</body>

<!-- <link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="flex-container">
    <div class="content-container">
      <div class="form-container">
        <form action="regis.php" method="POST">
          <h1>
            REGISTRATION
          </h1>
          <br>
          <br>
          <span class="subtitle">Name:</span>
          <br>
          <input type="text" name="nama" value="">
          <br>
          <span class="subtitle">Username:</span>
          <br>
          <input type="text" name="username" value="">
          <br>
          <span class="subtitle">Address:</span>
          <br>
          <input type="text" name="alamat" value="">
          <br>
          <span class="subtitle">Phone Number :</span>
          <br>
          <input type="text" name="no_hp" value="">
          <br>
          <span class="subtitle">Password:</span>
          <br>
          <input type="password" name="pass" value="">
          <br>
          <br>
          <input type="submit" name="submit" value="Register" class="submit-btn">
          <a href="index.php" class="submit-btn">Back</a>
        </form>
      </div>
    </div>
  </div> -->