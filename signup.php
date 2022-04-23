<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-commerce website</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style3.css">
    </head>
    <body>
        <header class="header">

            <a href="index.html" class="logo"> <i class=""></i> Skincare </a>
        
            <nav class="navbar">
                <a href="index.html">home</a>
                <a href="file:///C:/Users/rines/Desktop/Projekti%20web/index.html#:~:text=Read%20More-,Our,Features,-Organic%20Ingredients">features</a>
                <a href="products.html">products</a>
                <a href="file:///C:/Users/rines/Desktop/Projekti%20web/index.html#:~:text=Product,Categories">categories</a>
                <a href="blog1.html" >blogs</a>
            </nav>
        
            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
                <div class="fas fa-user" id="login-btn"></div>
            </div>
        
            <form action="" class="search-form">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <form action="" class="login-form" onsubmit="return false">
                <h3>login now</h3>
                <input type="email" placeholder="your email" id="emailSign" class="box">
                <input type="password" placeholder="your password" id="passSign" class="box">
                <p>don't have an account <a href="signup.html">create now</a></p>
                <input type="submit" value="login now" class="btn" onclick="validateForm()">
            </form>

          
        </header>


        <div class="container">
          <div class="title">Register here</div>
          <div class="content">
              <form action="" class="" onsubmit="return false">
                  <div class="user-details">
                      <div class="input-box">
                          <span class="details">Full Name</span>
                          <input type="text" placeholder="Enter your name" id="Name" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Username</span>
                          <input type="text" placeholder="Enter your username" id="Username" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Email</span>
                          <input type="text" placeholder="Enter your email" id="Email" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Phone Number</span>
                          <input type="text" placeholder="Enter your number" id="PhoneNumber" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Password</span>
                          <input type="password" placeholder="Enter your password" id="Password" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Confirm Password</span>
                          <input type="password" placeholder="Confirm your password" id="cPassword" required>
                      </div>
                  </div>
  
                  <div class="button">
                      <input  type="submit" value="Register" onclick="nextForm();"></input>
                  </div>
              </form>
          </div>
      </div>




<!-- footer   -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Skincare <i class="fas fa-shopping-basket"></i> </h3>
            <p>Keep in touch with us!</p>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a  class="links"> <i class="fas fa-phone"></i> +38344111222 </a>
            <a  class="links"> <i class="fas fa-phone"></i> +38349111222 </a>
            <a  class="links"> <i class="fas fa-envelope"></i> skincare@gmail.com </a>
            <a  class="links"> <i class="fas fa-map-marker-alt"></i> Prishtinë , Kosovë </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="file:///C:/Users/rines/Desktop/Projekti%20web/index.html#:~:text=Read%20More-,Our,Features,-Organic%20Ingredients" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="products.html" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="file:///C:/Users/rines/Desktop/Projekti%20web/index.html#:~:text=Product,Categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="blog1.html" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>


        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Adi Fejza & Rinesa Mehana </span> | All rights reserved </div>

</section>



        
<script src="script.js">    </script>


        
</body>

</html>

