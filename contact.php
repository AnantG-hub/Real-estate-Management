
<!DocType html>
    <head>
        <meta charset="UTF-8 " />
        <title>contact </title>
        <link rel="stylesheet" type="text/css" href="nav4.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            h1
            {
                font-family:'Courier New', Courier, monospace;
                margin-top:-0.3rem;
                font: 3em sans-serif;
                text-align: center;
                background-color:rgb(rgb(200, 0, 255), rgb(0, 68, 128), rgb(255, 170, 0)) ;
                font-variant:small-caps;
                border: 1rem solid #666;
                box-shadow:1 5rem;
                background: #999;
            }
            .clr{
                color:red;
            }
        </style>
    </head>
    <body>
        <section class="contact" id="contact">
            <h1 class="heading"><span class="clr">Contact</span>Us</h1>

            <div class="mycontainer">
            <?php include "header.php" ?>
            </div>

            <div class="boxo">
                <div class="icon">
                    <i class="fa fa-phone" style="font-size: 100px; color:blue;border:0.1rem solid #444;padding: 1rem; border-radius: 0.5rem;" ></i>
                    <h2>Phone Numbers</h2>
                   <a href="tel:+91 9690304788">+91 9690304788</a><br>
                   <a href="tel: +91 9027956959">+91 9027956959</a>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope-o" style="font-size:100px;color:red;border: 0.1rem solid#333;padding: 1rem; border-radius: 0.5rem;"></i>
                    <h2>Email Address</h2>
                   <a href="mailto:anantgairola5@gmail.com">anantgairola5@gmail.com</a><br><br>
                    <a href="#">anant10@gmail.com</a>
                </div>
                <div class="icon">
                    <i class="fa fa-institution" style="font-size: 100px;color:brown;border:0.1rem solid#333;padding: 1rem; border-radius: 0.5rem;" ></i>
                    <h2>Office Address</h2>
                    <address>Written by<a href="mailto:anantgairola@gmail.com">Anant Gairola</a><br>
                        visit us at:Apartments.com<br>
                        Nanda ki chowki,Dehradun-248007
                    </address>
                </div>
            </div>
            <section class="form" id="form">
           <div class="box">
            <form action="serverr.php" method="post" autocomplete="off">
                <h2>Send a Message..</h2>
                        <div class="inputbox">
                            <span>First Name :</span>
                            <input type="text" id="first_name" name="first_name" class="form-control mb-2" placeholder="first..."required>
                        </div>
                        <div class="inputbox">
                            <span>Last Name :</span>
                            <input type="text" id="last_name" name="last_name" class="form-control mb-2" placeholder="Last..."required>
                        </div>
                        <div class="inputbox">
                            <span>Email :</span>
                            <input type="text" id="email" name="email" class="form-control mb-2" placeholder="@gmail.com"required>
                        </div>
                        <div class="inputbox">
                            <span>Mobile No. :</span>
                            <input type="text" id="phone" name="phone" class="form-control mb-2" placeholder="+91-"required>
                        </div>
                            <div class="inputbox">
                                <span>Message :</span>
                                <textarea name="Message" class="form-control mb-7" placeholder="Write something Here..." cols="40"  rows="6" id="comments"></textarea>
                            </div>
                                <div class="inputbox">
                                    <input type="submit" name="submit" value="Send Message" id="verify" class="btn">
                                </div>
            </form>
            <iframe class="map" src="maps.pdf">
            </iframe>
            <div class="footer">
            <?php include "footer.php" ?>
           </div>
           </div>
        </section>
    </body>
</html>
