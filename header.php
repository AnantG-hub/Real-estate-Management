<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!-- header section starts  -->
<!DOCTYPE html>  
<html>  
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<header class="header">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="text-align: lift;"><i class="fa fa-reorder">All File</i>
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="index.php"><i class="fa fa-home">Home</i></a></li>
        <li><a href="feature.php"><i class="fa fa-bookmark">Feature</i></a></li>
        <li><a href="Agent.php"><i class="fa fa-group">Agents</i></a></li>
        <li><a href="service.php"><i class="fa fa-cogs">Service</i></a></li>
        <li><a href="about.php"><i class="fa fa-address-book">About</i></a></li>
        <li><a href="contact.php"><i class="fa fa-envelope">Contact</i></a></li>
        <li><a href="login.php?logout='1'"><i class="fa fa-sign-in">Login</i></a></li>
    </ul>
</div>
</div>
</header>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  
</body>
</html>
<!-- header section ends -->