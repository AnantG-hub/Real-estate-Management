<html>
    <head>
        <title>
            Services
        </title>
    </head>
        <body>
            <link rel="stylesheet"type="text/css" href="nav1.css">
            <section class="Services">
                <h1 class="heads">Our<span class="clr">Services</span></h1>
                <?php include "header.php" ?>
                <div class="boxo">
                    <div class="box">
                        <img src="icon-02.png" alt="">
                        <h3>Buying homes...</h3>
                        <p>keep your have an excellent chance with our templates for displing houses.</p>
                        <a href="Learn More.html#buying">learn More</a>
                    </div>
                    <div class="box">
                        <img src="icon-03.png">
                        <h3>Rent homes...</h3>
                        <p>All templates are responsive and Fully customizable with luxury apartments.</p>
                        <a href="Learn More.html#Rents">learn More</a>
                    </div>
                    <div class="box">
                        <img src="icon-01.png" alt="">
                        <h3>Selling homes...</h3>
                        <p>Great for selling properties to respond to offers.</p>
                        <a href="Learn More.html #Selling">learn More</a>
                    </div>
                    <div class="box">
                        <img src="24hour.png" alt="">
                        <h3>24/7 Services...</h3>
                        <p>This Services available for any user values.</p>
                        <a href="Learn More.html #24hour">learn More</a>
                    </div>
                    <div class="box">
                        <img src="shop.png" alt="">
                        <h3>Shops and Malls...</h3>
                        <p>All the necessary Product found in One Roof.</p>
                        <a href="Learn More.html #shops">learn More</a>
                    </div>
                </div> 
            </section>       
    <button id="myButton">
        Click me
    </button>
  <div id="myPopup" class="popup">
      <div class="popup-content">
          <h2 style="color: green;">REMS Essential Details..</h2>
            <p>Real Estate is a management of realestate
                agencies,agents,clients and financialtransactions,
                REMS provides comprehensive 
                reports for managing the Real Estate agency performance and efficiency,and
                enables the management for a better decision-making</p>
          <button id="closePopup">
                Close
            </button>
      </div>
  </div>
  <script>
      myButton.addEventListener("click", function () {
          myPopup.classList.add("show");
      });
      closePopup.addEventListener("click", function () {
          myPopup.classList.remove("show");
      });
      window.addEventListener("click", function (event) {
          if (event.target == myPopup) {
              myPopup.classList.remove("show");
          }
      });
      </script>
      <br>
      <section class="footer">
       <?php include "footer.php" ?>
      </section>
        </body>
</html>