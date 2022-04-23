<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-commerce website</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style2.css">
       
    
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
              <!--ndarje-->
             <br><br><br><br><br><br>



<!-- products   -->
<section class="products" id="products">

    <h1 class="heading"> All <span> products</span> </h1>

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/fs-produkt1.PNG" alt="">
                <h3>La Roche-Posay Effaclar Purifying Foaming Gel</h3>
                <div class="price"> 20.90€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkt2.png" alt="">
                <h3>Vichy Normaderm Phytosolution Promo 1+1</h3>
                <div class="price"> 21.00€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkti3.jpg" alt="">
                <h3>La Roche-Posay Micellar Cleansing</h3>
                <div class="price"> 11.90€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkti4.png" alt="">
                <h3>Vichy Normaderm Phytosolution</h3>
                <div class="price"> 20.80€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/fs-produkti5.jpg" alt="">
                <h3>La Roche-Posay Lipikar Cleansing Oil</h3>
                <div class="price"> 19.40€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkti6.jpg" alt="">
                <h3>Vichy Pureté Thermale Mineral Micellar Milk</h3>
                <div class="price"> 14.70€</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkti7.jpg" alt="">
                <h3>HUUMë Sapun Skrub Për Fytyrë</h3>
                <div class="price"> 4.30€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/fs-produkti8.jpg" alt="">
                <h3>La Roche-Posay Serozinc</h3>
                <div class="price"> 12.20€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>
</section>

<!-- products -->
            
            
<!-- products   -->
<section class="products" id="products">

    

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/serum1.jpg" alt="">
                <h3>Vichy Liftactiv Supreme H.A Filler</h3>
                <div class="price"> 39.40€</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum2.jpg" alt="">
                <h3>Vichy Mineral 89 Probiotic Fractions</h3>
                <div class="price"> 32.30€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum3.jpg" alt="">
                <h3>La Roche-Posay Effaclar Duo + Serum Cream</h3>
                <div class="price"> 37.20€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum4.png" alt="">
                <h3>Sebamed PRO! Hydro Serum</h3>
                <div class="price"> 20.80€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/serum5.jpg" alt="">
                <h3>La Roche-Posay Pure Vitamin C10 Serum</h3>
                <div class="price"> 37.90€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum6.png" alt="">
                <h3>Vichy Liftactiv Specialist Glyco-C Night Peeling</h3>
                <div class="price"> 23.80€</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum7.jpg" alt="">
                <h3>Vichy Neovadiol Complex Serum</h3>
                <div class="price"> 36.10€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/serum8.png" alt="">
                <h3>La Roche – Posay Toleriane Ultrac</h3>
                <div class="price"> 32.20€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>
</section>

<!-- products  -->


<!-- products   -->
<section class="products" id="products">

   

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/m1.jpg" alt="">
                <h3>Vichy Minéralblend 16H Hold Hydrating Foundation </h3>
                <div class="price"> 21.90€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m2.jpg" alt="">
                <h3>Vichy Liftactiv Collagen Specialist Night</h3>
                <div class="price"> 45.10€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m3.jpg" alt="">
                <h3>HUUMë natural face oil</h3>
                <div class="price"> 15.50€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m4.jpg" alt="">
                <h3>Vichy Idealia normal skin</h3>
                <div class="price"> 30.80€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/m5.jpg" alt="">
                <h3>Vichy Liftactiv Specialist Peptide-C Anti-Ageing</h3>
                <div class="price">27.40€  </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m6.png" alt="">
                <h3>Vichy Dermablend</h3>
                <div class="price"> 25.10€</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m7.png" alt="">
                <h3>Sebamed PRO! Krem Rigjenerues</h3>
                <div class="price"> 18.70€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/m8.png" alt="">
                <h3>HUUMë butter stick</h3>
                <div class="price"> 6.40€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>
</section>


<section class="products" id="products">

    

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/b1.jpg" alt="">
                <h3>Body milk CHLOE </h3>
                <div class="price"> 27.75 € </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b2.jpg" alt="">
                <h3>Lotion Victoria's Secret Coco Energy</h3>
                <div class="price">16.40 €  </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b3.jpg" alt="">
                <h3>Neutrogena Hydro Boost Bodylotion</h3>
                <div class="price"> 8.72 € </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b4.jpg" alt="">
                <h3>Body scrub Pink Passion</h3>
                <div class="price"> 4.25 € </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="product-container">

        <div class="products-content">

            <div class="box">
                <img src="image/b5.jpg" alt="">
                <h3>Body Scrub Organic Shop Cocoa</h3>
                <div class="price"> 4.86 € </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b6.jpg" alt="">
                <h3>Body peeling Organic Shop Rose and Salt</h3>
                <div class="price">4.80 € </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b7.jpg" alt="">
                <h3>Body Spray Victoria's Secret Love Spell</h3>
                <div class="price"> 21.00 €</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="image/b8.jpg" alt="">
                <h3> Body lotion Dermacol Balance Coconut</h3>
                <div class="price"> 6.03€ </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>
</section>
      





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



<script src="script.js"> </script>
            
        

</body>

</html>
   
    