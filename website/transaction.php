<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array of sender

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query); // returns array of receiver


    // condition to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


    // condition to check insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    

    // condition to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query)
                {
                     echo "<script> alert('Transaction Successful');
                                     window.location='viewTransaction.php';
                           </script>";   
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>


<!-- Transfer momey -> Transaction Page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&family=Fredoka+One&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="transaction.css">
  

  <title>Bank of TSF</title>
  <link rel="shortcut icon" href="TsfLogo.png" type="image/x-icon">
  <style type="text/css">
  
    
    h2{
      text-align: center; margin-top: 40px;  
      font-family: 'Fredoka One', cursive;
    }

  </style>
}
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
            <a style="color: orange; font-size: 25px; margin-left: 40px;" class="nav-link" href="userdetails.php">CREATE USER</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="transfermoney.php">MAKE TRANSACTION</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="viewTransaction.php">HISTORY</a>
          </li>
        </ul> 
      </div>
    </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

<!-- Form -->
        <h2>Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

            <form class="contact" method="post">
                <label>Sender's Name:</label><br/>
                <input type="text" name="Name" value="<?php echo $rows['name']; ?>">

                <label>Balance:</label><br/>
                <input type="text" name="balance" value="<?php echo $rows['balance']; ?>" >

                <label>Transfer to:</label><br/>
                <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option> 
                <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?>
               
                </option>
                <?php 
                    } 
                ?>
            </select> <br/><br/>
                <label>Amount:</label><br/>
                <input type="number" name="amount" required>

                <input type="submit" name="submit" value="Transfer"><br/>
            </form>
<!--End of Form-->

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
