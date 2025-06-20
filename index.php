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
<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>
        <link rel="stylesheet" type="text/css" href="nav11.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <style>
            h1
            {
                font-family:'Courier New', Courier, monospace;
                margin-top: -3cqmax;
                padding: 0%;
                font: 4.6em sans-serif;
                text-align:center;
               color: red;
                font-variant:small-caps;
                
            }
        </style>
    </head>
    <body>
        <img src="logoo.png">
        <h1>Welcome To Real Estate World</h1>
         <div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
        </div>
        <ul>
            <li>
                <a href="index.php">
                    <div class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>	
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Home">Home</span></div>
                </a>
            </li>
            <li>
                <a href="feature.php">
                    <div class="icon">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <i class="fa fa-bookmark" aria-hidden="true"></i>		
                    </div>
                    <div class="name"><span data-text="Features">Features</span></div>
                </a>
            </li>
            <li>
                <a href="Agent.php">         
                    <div class="icon">
                        <i class="fa fa-group" aria-hidden="true"></i>
                        
                        <i class="fa fa-group" aria-hidden="true"></i>
                            
                    </div>
                    <div class="name"><span data-text="Agents">Agents</span></div> 
                </a>
            </li>
            <li>
                <a href="service.php">
                    <div class="icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        	
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        	
                    </div>
                    <div class="name"><span data-text="Services">Services</span></div>
                </a>
            </li>
            <li>
                <a href="about.php">
                    <div class="icon">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <i class="fa fa-address-book" aria-hidden="true"></i>	
                    </div>
                    <div class="name"><span data-text="About_Us">About_Us</span></div>
                    
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <i class="fa fa-envelope" aria-hidden="true"></i>	
                    </div>
                    <div class="name"><span data-text="Contact">Contact</span></div>
                    
                </a>
            </li>
            <li>
                <a href="login.php?logout='1'">
                    <div class="icon">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>	
                        <i class="fa fa-sign-in" aria-hidden="true"></i>      
                    </div>
                    <div class="name"><span data-text="Login">Login</span></div>
                </a>
            </li>
        </ul>
<div class="home">

   <section class="center">

      <form action="feature.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>enter location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_min" class="input" required>
               <option value="30000">30000</option>
                        <option value="35000">35000</option>
                        <option value="40000">40000</option>
                        <option value="50000">50000</option>
                        <option value="70000">70000</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
               <option value=" 1150000">1150000</option>
                        <option value=" 2200000">2200000</option>
                        <option value=" 3250000">3250000</option>
                        <option value=" 5300000">5300000</option>
                        <option value=" 7450000">7450000</option>
               </select>
            </div>
            <input type="submit" value="search property" name="h_search" class="btn">
         </div>
      </form>
   </section>

</div>
</body>
</html>