<?php require_once 'controllers/userController.php'; 

    $insert = new User;
    if(isset($_POST['submit'])){
        $insert->insertUser($_POST);
    }
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

        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body >
        <!-- ndarje -->
    <br><br><br><br><br><br>
    <!-- header -->
  <?php include "includes/header.php"?>
    <!-- header -->
    <!-- signup-form -->
  <div class="containersign">
    <div class="title">Register here</div>
    <div class="content">
      <form action="" method="POST" class="">
        <div class="user-details">
                      <div class="input-box">
                          <span class="details">Full Name</span>
                          <input name = "emri" type="text" placeholder="Enter your name" id="Name" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Username</span>
                          <input name="username" type="text" placeholder="Enter your username" id="Username" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Email</span>
                          <input name="email" type="text" placeholder="Enter your email" id="Email" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Phone Number</span>
                          <input name="numri" type="text" placeholder="Enter your number" id="PhoneNumber" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Password</span>
                          <input name="pass" type="password" placeholder="Enter your password" id="Password" required>
                      </div>
                      <div class="input-box">
                          <span class="details">Confirm Password</span>
                          <input name="pass1" type="password" placeholder="Confirm your password" id="cPassword" required>
                      </div>
                  </div>
  
                  <div class="button">
                      <input  name="submit" type="submit" value="Register" onclick="nextForm();"></input>
                  </div>
              </form>
          </div>
      </div>
      <!-- signup-form -->
        
</body>
        
<script src="js/script.js"></script>
</html>

