<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&family=Fredoka+One&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="createuser.css">
  <link rel="stylesheet" type="text/css" href="table.css">

  <title>Bank of TSF</title>
  <link rel="shortcut icon" href="TsfLogo.png" type="image/x-icon">
</head>
<body>

<!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="imgnav" src="TsfLogo.png" alt="logo" style="width:40px;" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto justify-content-end">
          <li class="nav-item active">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a style="color: white; font-size: 25px; margin-left: 40px;" class="nav-link" href="#">CREATE USER <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="transfermoney.php">MAKE TRANSACTION</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="#viewTransaction">HISTORY</a>
          </li>
        </ul> 
      </div>
    </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }

?>


<h2 class="text-center pt-4" style="color: black;">Create a User</h2>
<br>


<div class="background">
	<div class="container1">
		<div class="screen">
			<div class="screen-header">
				<div class="screen-header-ellipsis"></div>
				<div class="screen-header-ellipsis"></div>
				<div class="screen-header-ellipsis"></div>
			</div>
		</div>
		

		<div class="screen-body">
			<div class="screen-body-item left">
				<img class="img-fluid" src="users.jpg" style="border: none; border-radius: 50%;">
			</div>
			
			<div class="screen-body-item">
				<form class="app-form" method="post">
					<div class="app-form-group">
			              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
			            </div>
			            <div class="app-form-group">
			              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
			            </div>
			            <div class="app-form-group" >
			              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
			            </div>
			            <br>
			            <div class="app-form-group-button">
			              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
			              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
			            </div>	
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
  <footer>
    <div class="follow">
      <h3>Follow Us</h3>
      <div class="social">
        <a href="#facebook" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; A project by Aamir Jawadwala
    </p>
  </footer>
  <!-- End Footer -->

 
</body>
</html>