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
            <a style="color: white; font-size: 25px; margin-left: 40px;"class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;" class="nav-link" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="#contact">CONTACT US</a>
          </li>
        </ul> 
      </div>
    </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

<!--Home-->
<section class="topContent">
    <div class="mainHeading">
      <div>
        <span class="main-content">Basic Banking System</span>
      </div>
      <div style="margin-top: 12px;">
        <div class="sub-content">A Basic Banking System project for making</div>
        <div class="sub-content">secure transactions between users.</div>
      </div>
      <a href="#services" class="hero-button">Let's Get Started</a>
    </div>
    <div class="topContentImg">
      <img src="bank_image1.jpg" alt="Banking">
    </div>
</section>
<!-- End of Home-->

<!-- About -->
 <section id="about" class="container">
    <h2 class="heading">About Us</h2>
     <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="AboutUs.png" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
        <div>
            <span class="text">Bank of TSF</span>
        </div>
        <div class="mt-2">
            <span class="sub-content">It is a Basic Banking System for making simple and secure transactions between users.
              It is used for transfering money between customer accounts. Also to view transaction history of customers and view and manage user data. </span>
        </div>
          <a href="#services" class="hero-button">Learn More</a>
        </div> 
      </div>
    </div>
  </section>
  <!-- End About -->


<!-- Services -->
<section class="container" id="services">
  <h2 class="heading">Our Services</h2>

  <div class="container text-center">
    <div class="row">
      
      <div class="card col-md-3 mx-auto" style="width: 18rem;">
        <i class="fas fa-users fa-7x"></i>
        
          <div class="card-body">
            <h5 class="card-title">Create User</h5>
            <p class="card-text">Create your profile over here</p>
            <a href="userdetails.php" class="hero-button">Create</a>
          </div>
      </div>
      

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <i class="fas fa-search fa-7x"></i>
          <div class="card-body">
            <h5 class="card-title" id="harry">View Transactions</h5>
            <p class="card-text"> View all the past transactions happened between different accounts</p>
            <a href="viewTransaction.php" class="hero-button">View Transactions</a>
          </div>
        </div>


        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <i class="fas fa-random fa-7x"></i>
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="hero-button">Transfer Money</a>
          </div>
        </div>

    </div>
    
  </div>
  
</section>
<!-- End of Services -->


<!-- Contact -->
  <section class="mx-auto" id="contact">

    <h2 class="heading">Contact Us</h2>
    <form>
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter your E-Mail">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Your City" aria-label="City">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>
      <button type="submit" class="hero-button">Submit</button>
    </form>
  </section>
  <!-- End Contact -->

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