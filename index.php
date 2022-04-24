<?php
    require_once './controllers/SliderController.php';
    $slider = new SliderController();
    $data=$slider->readSlider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-commerce website</title>
        <link rel="icon" href="image/websitelogo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/Slidercss.css">
        
        
    </head>
    <body>
    <!-- ndarje -->
    <br><br><br><br><br><br>
        <!-- header -->

       <?php include "includes/header.php" ;?>

 <!-- perfundimi pjesa e header --> 
 <div class="slider">
        <?php
            foreach($data as $key=>$value){ 
            if($value['id']==1){
                ?>
                <input type="radio" name="slide" id="slide-<?php echo $value['id'] ?>" checked>
                <?php } else {?>
                    <input type="radio" name="slide" id="slide-<?php echo $value['id'] ?>" >
        <?php }    }
        ?>
    <!-- <input type="radio" name="slide" id="slide-1" checked>
    <input type="radio" name="slide" id="slide-2">
    <input type="radio" name="slide" id="slide-3"> -->
<!-- slider -->
    <div class="slides">
        <?php
            foreach($data as $key=>$value){ ?>
                <div class="slide" style="background-image: url(<?php echo $value['slider_image'] ?>);">
                <div class="slide-data">
                <h1><?php echo $value['slider_title']; ?></h1>
                <P><?php echo $value['slider_body']; ?></P>
                    <button onclick="document.location='aboutus.php'"> ABOUT US </button>
            </div>
                </div>
        <?php    }
        ?>
        <!-- <div class="slide slide-1">
            <div class="slide-data">
                <h1>We care  about your skin</h1>
                <P>The beauty world is brimming with high-tech devices and cutting-edge ingredients, 
                    but when it comes to handling some of the most common skin care problems, newer isn't always better. 
                    In some cases, simple natural options might be as effective as scientifically engineered solutions.</P>
                    <button onclick="document.location='ourStory.php'"> ABOUT US </button>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-data">
                <h1>We care  about your skin</h1>
                <P>The beauty world is brimming with high-tech devices and cutting-edge ingredients, 
                    but when it comes to handling some of the most common skin care problems, newer isn't always better. 
                    In some cases, simple natural options might be as effective as scientifically engineered solutions.</P>
                    <button onclick="document.location='ourStory.php'"> ABOUT US </button>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-data">
                <h1>We care  about your skin</h1>
                <P>The beauty world is brimming with high-tech devices and cutting-edge ingredients, 
                    but when it comes to handling some of the most common skin care problems, newer isn't always better. 
                    In some cases, simple natural options might be as effective as scientifically engineered solutions.</P>
                    <button onclick="document.location='ourStory.php'"> ABOUT US </button>
            </div>
        </div> -->
    </div>

    <div class="arrows arrow-left">
        <label for="slide-3">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
        <label for="slide-1">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
        <label for="slide-2">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
    </div>

    <div class="arrows arrow-right">
        <label for="slide-2">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
        <label for="slide-3">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
        <label for="slide-1">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
    </div>

    <div class="dots">
    <?php
            foreach($data as $key=>$value){ 
                ?>
                <label for="slide"></label>
            <?php  }
        ?>
    </div>
</div>

<!-- perfundimi i slider -->

<!-- pjesa e kategorive -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/facialcleanser.PNG" alt="">
            <h3>Facial Cleansers</h3>
            <br><br>
            <a href="facialcleanser.php" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/faceserum.PNG" alt="">
            <h3>Face Serums</h3>
            <br><br>
            <a href="faceserums.php" class="btn">See more</a>
        </div>

        <div class="box">
            <img src="image/mositurizer.PNG" alt="">
            <h3>Moisturizes</h3>
            <br><br>
            <a href="moisturizer.php" class="btn">See more</a>
        </div>

        <div class="box">
            <img src="image/bodybutter.PNG" alt="">
            <h3>Body Care</h3>
            <br><br>
            <a href="bodycare.php" class="btn">See more</a>
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
                <a href="blog1.php#blog1" class="btn">read more</a>
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
                <p>we make it easer for you to choose the best cleanser for your skin.</p>
                <a href="blog1.php#blog2" class="btn">read more</a>
                
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
                <a href="blog1.php#blog3" class="btn">read more</a>
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

<?php include "includes/footer.php" ;?>

<!-- footer -->





        
    </body>
<script src="js/script.js"></script>
</html>
<script>
    <?php if (isset($_SESSION['message']) && $_SESSION['message']=="Yes") { ?>
        alert('Login Successfully');
    <?php
    $m=" ";
    $_SESSION['message']=$m; } ?>
</script>
