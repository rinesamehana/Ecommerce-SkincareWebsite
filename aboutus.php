<?php require_once "./controllers/aboutController.php";?>
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
    
    </head>
    <body>
   <!-- header -->
   <?php   include "includes/header.php"; ?>
  <!--------------------------------------------------------------------------------------------------------------->
<!-- 
  <div class="about">
    <div class="inner-section">
        <h1>About Us</h1>
        <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloribus velit ducimus, enim inventore earum, eligendi 
            nostrum pariatur necessitatibus eius dicta a voluptates sit 
            deleniti autem error eos totam
             nisi neque voluptates sit deleniti autem error eos totam nisi neque.
        </p>
        <div class="skills">
            <button>Contact Us</button>
        </div>
    </div>
</div> -->


<div class="about">
 <?php
 $about=new AboutController;
 $about1=$about->readAbout();
 for($i=0 ; $i < count($about1);$i++){
     echo'
     <div class="inner-section">
        <h1>'.$about1[$i]['title'].'</h1>
        <p class="text">
           '.$about1[$i]['body'].'
        </p>';}
        ?>
        <div class="skills">
            <button onclick="document.location='contactus.php'"> Contact Us </button>
        </div>
    </div>

 
</div>



  


<!-- footer   -->
<?php   include "includes/footer.php"; ?>

<!-- footer  --> 

</body>
<script src="js/script.js"></script>
</html>
   
