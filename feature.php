<!DOCTYPE html>
<html>
  <title>Feature</title>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="nav2.css">
<body>
  <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
    </style>
</head>
<body>
        <h1 class="heading"><span class="clr">Feature</span>Properties</h1>

        <?php include "header.php" ?>
<div id="myBtnContainer">
  <i class="fa fa-filter">Filter::</i>
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('for rent')"> for rent</button>
  <button class="btn" onclick="filterSelection('for sell')"> for sell</button>
</div>
<div class="rate">
    <button id="myButton">
        Rate Us:://-
    </button>
  <div id="myPopup" class="popup">
      <div class="popup-content">
          <h2 style="color:green;">REMS Essential Rate Us Details..</h2>
            <div class="center">
                <input type="radio" id="five" name="rate" value="5">
                <label for="five"></label>
                <input type="radio" id="four" name="rate" value="4">
                <label for="four"></label>
                <input type="radio" id="three" name="rate" value="3">
                <label for="three"></label>
                <input type="radio" id="two" name="rate" value="2">
                <label for="two"></label>
                <input type="radio" id="one" name="rate" value="1">
                <label for="one"></label>
                <span class="result"></span>
            </div>
            <div class="form">
            <form action="review.php" method="post" >
            <div class="inputbox">
                                <span>Message :</span>
                                <textarea name="Message" class="form-control mb-7" placeholder="Write something Here..." cols="40"  rows="6" id="comments"></textarea>
                            </div>
            <center>
            <div class="inputbox">
            <input type="submit" name="send" value="send" id="verify" class="btn">
            </center>
        </form>
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
</div>
</div>
<div class="boxo">
  <div class="filterDiv for rent">
    <div class="box">
    <div class="filter-item  For-Rent">
    <div class="img-con">
        <img src="home1.jpg" alt="img">
        <div class="info">
            <h3>4 days ago</h3>
            <h3>for rent</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>1</h3>
            </a>
            <a href="view.html#container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 60,000/-</h3>
            <button id="like" onclick="fav()">
            <i class="fa fa-heart"></i>
            </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Alcove Apartmens</h3>
        <p>Selaqui,Dehradun,uttarakhand-248007</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1800 sqft</h3>
        <h3><i class="fa fa-bed"></i>3beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" style="background:green;">
        <a href="buy.html" class="cart">Buy now</a>
    </button>
    </div>
</div>
</div></div>
  <div class="filterDiv for sell "><div class="box">
    <div class="filter-item For-Sell">
    <div class="img-con">
        <img src="home2.jpg" alt="img">
        <div class="info">
            <h3>5 days ago</h3>
            <h3>for sell</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>1</h3>
            </a>
            <a href="view1.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 8,34,80,000/-</h3>
            <button id="like1" onclick="fav1()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Triplex Apartmens</h3>
        <p>Rajpur,uttarakhand-248007</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view1.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>2100 sqft</h3>
        <h3><i class="fa fa-bed"></i>4beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for sell"><div class="box">
    <div class="filter-item For-Sell" >
    <div class="img-con">
        <img src="home3.jpg" alt="img">
        <div class="info">
            <h3>7 days ago</h3>
            <h3>for sell</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>2</h3>
            </a>
            <a href="view2.html #container" class="fa fa-camera">
                <h3>4</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 5,55,70,000/-</h3>
            <button id="like2" onclick="fav2()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Pent House</h3>
        <p>Roorkee,uttarakhand-248007</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
        <i class="fa fa-star-o"></i>

    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view2.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1530 sqft</h3>
        <h3><i class="fa fa-bed"></i>3beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for rent"><div class="box">
    <div class="filter-item For-Rent">
    <div class="img-con">
        <img src="home4.jpg" alt="img">
        <div class="info">
            <h3>2 days ago</h3>
            <h3>for rent</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>3</h3>
            </a>
            <a href="view3.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 70,000/-</h3>
            <button id="like3" onclick="fav3()">
                <i class="fa fa-heart"></i>
                </button>

            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Ordinary Apartmens</h3>
        <p>VikasNagar,uttarakhand-248007</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view3.html" class="btn">View Detail</a>

    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1650 sqft</h3>
        <h3><i class="fa fa-bed"></i>2beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for sell"><div class="box">
    <div class="filter-item For-Sell">
    <div class="img-con">
        <img src="home5.jpg" alt="img">
        <div class="info">
            <h3>4 days ago</h3>
            <h3>for sell</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>2</h3>
            </a>
            <a href="view4.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 6,73,80,000/-</h3>
            <button id="like4" onclick="fav4()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Coliving Apartmens</h3>
        <p>Pauri,uttarakhand-246001</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view4.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1900 sqft</h3>
        <h3><i class="fa fa-bed"></i>3beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for rent"> <div class="box">
    <div class="filter-item For-Rent">
    <div class="img-con">
        <img src="home6.jpg" alt="img">
        <div class="info">
            <h3>3 days ago</h3>
            <h3>for rent</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>1</h3>
            </a>
            <a href="view5.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 80,000/-</h3>
            <button id="like5" onclick="fav5()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Micro Apartmens</h3>
        <p>Chamoli,uttarakhand-246443</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view5.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>2400 sqft</h3>
        <h3><i class="fa fa-bed"></i>4beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for sell"><div class="box">
    <div class="filter-item For-Sell">
    <div class="img-con">
        <img src="home7.jpg" alt="img">
        <div class="info">
            <h3>5 days ago</h3>
            <h3>for sell</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>2</h3>
            </a>
            <a href="view6.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3>7,63,55,000/-</h3>
            <button id="like6" onclick="fav6()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Golden House</h3>
        <p>Saharanpur,UttarPardesh-247001</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view6.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1400 sqft</h3>
        <h3><i class="fa fa-bed"></i>4beds</h3>
        <h3><i class="fa fa-bath"></i>3baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for rent"><div class="box">
    <div class="filter-item For-Rent">
    <div class="img-con">
        <img src="home8.jpg" alt="img">
        <div class="info">
            <h3>3 days ago</h3>
            <h3>for rent</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>2</h3>
            </a>
            <a href="view7.html #container" class="fa fa-camera">
                <h3>4</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
            <div class="price"><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i></div>
            <h3> 55,000/-</h3>
            <button id="like7" onclick="fav7()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Villa House</h3>
        <p>Delhi,India-110001</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view7.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>1100 sqft</h3>
        <h3><i class="fa fa-bed"></i>3beds</h3>
        <h3><i class="fa fa-bath"></i>2baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div></div>

  <div class="filterDiv for rent"> <div class="box">
    <div class="filter-item For-Rent">
    <div class="img-con">
        <img src="home9.jpg" alt="img">
        <div class="info">
            <h3>5 days ago</h3>
            <h3>for rent</h3>
        </div>
        <div class="icon">
            <a href="realestate.mp4" class="fa fa-film">
                <h3>2</h3>
            </a>
            <a href="view8.html #container" class="fa fa-camera">
                <h3>5</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="price">
           <p><i class="fas fa-indian-rupee-sign" style="font-size: 2rem; color: palevioletred;"></i>
            <h3>75,000/-</h3></p>
            <button id="like8" onclick="fav8()">
                <i class="fa fa-heart"></i>
                </button>
            <a href="contact.php" class="fa fa-envelope"></a>
            <a href="contact.php" class="fa fa-phone" style="color: aqua;"></a>
        </div>
    </div>
    <div class="location">
        <h3>Divine Homes</h3>
        <p>Delhi,India-110001</p>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <div class="buttons">
        <a href="filter.html" class="btn">Request Info</a>
        <a href="view8.html" class="btn">View Detail</a>
    </div>
    <div class="detail">
        <h3><i class="fa fa-expand"></i>2000 sqft</h3>
        <h3><i class="fa fa-bed"></i>5beds</h3>
        <h3><i class="fa fa-bath"></i>3baths</h3>
    </div>
    <div class="cart">
        <button type="submit" id="button" onclick="blur" style="background:green;">
        <a href="buy.html" class="cart">Buy Now</a>
    </button>
    </div>
</div>
</div>
</div></div>
</div>
<br>
<section class="footer">
<?php include "footer.php" ?>
</section>
<script src="like.js"></script>
<script src="filterr.js"></script>
</body>
</html>