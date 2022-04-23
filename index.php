<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-commerce website</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="header">

            <a href="index.html" class="logo"> <i class=""></i> Skincare </a>
        
            <nav class="navbar">
                <a href="index.html">home</a>
                <a href="#features">features</a>
                <a href="products.html">products</a>
                <a href="#categories">categories</a>
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
 <!-- perfundimi pjesa e header --> 


         <section class="home" id="home">
        <div class="content">
        <h3> We care  about your skin</h3>
        <p> From the roots of the mother nature.</p>
        <a href="OurStory.html" class="btn">About us</a>
        </div>
       </section> 


<!-- pjesa e kategorive -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/facialcleanser.PNG" alt="">
            <h3>Facial Cleansers</h3>
            <br><br>
            <a href="facialcleanser.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/faceserum.PNG" alt="">
            <h3>Face Serums</h3>
            <br><br>
            <a href="faceserums.html" class="btn">See more</a>
        </div>

        <div class="box">
            <img src="image/mositurizer.PNG" alt="">
            <h3>Moisturizes</h3>
            <br><br>
            <a href="moisturizer.html" class="btn">See more</a>
        </div>

        <div class="box">
            <img src="image/bodybutter.PNG" alt="">
            <h3>Body Care</h3>
            <br><br>
            <a href="bodycare.html" class="btn">See more</a>
        </div>

    </div>

</section>

<!-- perfundim -->



<!-- blog  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blogfoto1.PNG" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Rina Veseli </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>WHAT IS BLUE LIGHT AND HOW DOES IT AFFECT SKIN?</h3>
                <p>In this blog, we reveal what blue light is, its impact on skin. </p>
                <a href="blog1.html" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blogfoto2.PNG" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Rinora Murtezi </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st June, 2020 </a>
                </div>
                <h3>FINDING THE BEST CLEANSER FOR ACNE</h3>
                <p>we make it easer for you to choose the best.</p>
                <a href="file:///C:/Users/rines/Desktop/web%20project/blog1.html#:~:text=FINDING%20THE%20BEST,Known%20As%20Pores" class="btn">read more</a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/blogfoto3.PNG" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Rinesa Mehana </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 2nd may, 2021 </a>
                </div>
                <h3>WHAT IS RETINOL? BREAKING DOWN THE KEY BENEFITS</h3>
                <p>If you dont have infos about retinol, here you find it.</p>
                <a href="file:///C:/Users/rines/Desktop/web%20project/blog1.html#:~:text=WHAT%20IS%20RETINOL%3F%20BREAKING%20DOWN%20THE%20KEY%20BENEFITS" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs  -->

<!-- features   -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/skinlogo.png" alt="">
            <h3>Organic ingredients</h3>
            
        </div>

        <div class="box">
            <img src="image/delivery.png" alt="">
            <h3>free delivery</h3>
        
            
        </div>

        <div class="box">
            <img src="image/payments.png" alt="">
            <h3>easy payments</h3>
            
        </div>

    </div>

</section>

<!-- features  -->





<!-- footer  -->

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
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="products.html" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
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

<!-- footer -->



<script src="script.js">    </script>


        
    </body>

</html>
