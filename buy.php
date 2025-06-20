
<!DOCTYPE html>
    <head>
        <title> payment </title>
        <link rel="stylesheet"type="text/css" href="nav7.css">
    </head>
    <body>
        <header>
            <div class="detail">
                <div class="boxx">
                        <h2><u> Billing  Details</u></h2>
                        <form action="">
                            <label>First Name:</label>
                            <input type="text"placeholder="first name" required><br>
                            <label>Last Name:</label>
                            <input type="text"placeholder="sec. name" required><br>
                            <label>Email:</label>
                            <input type="email"placeholder="@gmail.com" required><br>
                            <label>Address:</label>
                            <input type="text"placeholder="Enter Address.." required><br>
                                <label>City:</label>
                                <input type="text"placeholder="Enter city.." required><br>
                                <div class="state">
                            <label>State:</label>
                            <select>
                                <option>Choose State..</option>
                                <option>Uttarakhand</option>
                                <option>Uttar Pradesh</option>
                                <option>Delhi</option>
                                <option>j&k</option>
                                <option>H.P</option>
                            </select>
                                </div>
                                <label>Zip Code:</label>
                                <input type="number"placeholder="zip code" required>     
                        </form>
                    </div>
                    <div class="box">
                        <h2><u> Transaction</u></h2>
                        <label>Accepted Card</label>
                        <img src="payment.jpg" style="width: 110%;"><br><br>
                       <label>Credit Card number:</label> 
                        <input type="text"placeholder="Enter card no.." required>
                        <label>Exp Month:</label> 
                        <input type="number"placeholder="Enter Month" required>
                        <div>
                        <label>Exp Year:</label> 
                            <select>
                                <option>Choose Year..</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                            </select>
                        </div>
                            <label>Cvv</label>
                            <input type="number"placeholder="Enter Cvv" required><br><br><br>
                            <button id="payment" type="button" value="">Payment to Proceed</button>
                             <div id="bill" class="bills">
                                <div class="bil">
                                    <h2 style="color:red;text-align: center;">"Thanks You!".. </h2>
                                    <p>You details has been successfully<br>
                                    Submitted.Thanks!</p>
                            <button id="closePopup">
                            Confirm
                        </button>
                     </div>
                             </div>
              <script>
                  payment.addEventListener("click", function () {
                      bill.classList.add("show");
                  });
                  closePopup.addEventListener("click", function () {
                      bill.classList.remove("show");
                  });
                  window.addEventListener("click", function (event) {
                      if (event.target == bill) {
                          bill.classList.remove("show");
                      }
                  });
                  </script>            
                </div>
            </div>
        </header>
    </body>
</html>