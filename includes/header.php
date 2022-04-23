<header class="header">

<a href="index.php" class="logo"> <i class=""></i> Skincare </a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="index.php#features">features</a>
    <a href="products.php">products</a>
    <a href="index.php#categories">categories</a>
    <a href="blog1.php" >blogs</a>
    <a href="aboutus.php">about us</a>
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

<form action="validimi.php" method="POST" class="login-form" >
    <h3>login now</h3>
    <input name="email" type="email" placeholder="your email" id="emailSign" class="box">
    <input name="password" type="password" placeholder="your password" id="passSign" class="box">
    <p>don't have an account <a href="signup.php">create now</a></p>
    <input name = "submit" type="submit" value="login now" class="btn">
</form>


</header>