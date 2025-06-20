
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style4.css">
   <style>
        h1 {
            margin-top:-0.3rem;
            font-family: 'Courier New', Courier, monospace;
            font: 5em sans-serif;
            text-align: center;
            background-color: rgb(rgb(200, 0, 255), rgb(0, 68, 128), rgb(255, 170, 0));
            font-variant: small-caps;
            border: 1rem solid #666;
                box-shadow:1 5rem;
                background: #999;
        }

        .clr {
            color: brown;
        }
        .boxx{
         text-align:right;
         margin-right: 135rem;
        }
    </style>
</head>
<body>
<h1 class="head"><span class="clr">About</span>Us</h1>
<div class="boxx">
<?php include "header.php" ?>
</div>
<section class="about">
   <div class="row">
      
      <div class="image">
         <img src="about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>The real of World Wide Web have spread across millions of 
            households, so naturally, Internet has become by far the best platform 
            for real estate marketing business today.<br>
            This project traverses a lot of areas ranging from business concept to 
            computing field, and required to perform several researches to be 
            able to achieve the project objectives.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>
<section class="steps">

   <h2 class="heading">3 simple steps</h2>

   <div class="box-container">

      <div class="box">
         <img src="step-1.png" alt="">
         <h3>search property</h3>
         <p>Web-platform means that the system will be available for access 
            24/7 except when there is a temporary server issue which is 
            expected to be minimal.</p>
      </div>

      <div class="box">
         <img src="step-2.png" alt="">
         <h3>contact agents</h3>
         <p> General customers as well as the company’s staff will be able to 
            use the system effectively.</p>
      </div>

      <div class="box">
         <img src="step-3.png" alt="">
         <h3>enjoy property</h3>
         <p> We will develop a website that will eliminate the existing 
            manual system and help website users to save time and money 
            by booking their different types of events.</p>
      </div>

   </div>
   

</section>


<section class="reviews">

   <h2 class="heading">client's reviews</h2>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="pic-1.png" alt="">
            <div>
               <h3>John Deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The websites need to be user-friendly and easy to access 
            so that the end user (users and admin staff) can easily use 
            this website. !</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="pic-2.png" alt="">
            <div>
               <h3>Kai Miller</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Allows the customers to view or get details of various 
            properties/flats available. Add the properties/flats to the 
            stock.!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="pic-3.png" alt="">
            <div>
               <h3>Charlie deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>We get to appreciate use and great response from real estate website..!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="pic-4.png" alt="">
            <div>
               <h3>Kate Winslet</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p> Reserve houses online and for the company to effectively 
            manage their House rental business.!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="pic-5.png" alt="">
            <div>
               <h3>Van Jefferson</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>service of properties / flats in the better quality 
            service that customers want.!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="pic-6.png" alt="">
            <div>
               <h3>Ashley Canva</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p> Manual process of renting a house to an 
            online and computerized system.!</p>
      </div>

   </div>
   

</section>
<br>
<section class="footer">
<?php include "footer.php" ?>
</section>
</body>
</html>